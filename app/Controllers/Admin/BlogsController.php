<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogsModel;

class BlogsController extends BaseController
{

    public function blogs()
    {
        $model = new BlogsModel();

        $data = $model->orderBy('published_on', 'DESC')->findAll();

        return view('admin/blogs/index', ['blg' => $data]);
    }


    public function create()
    {
        if ($this->request->getMethod() === 'POST') {

            $model = new BlogsModel();

            $title = $this->request->getPost('title');
            $customSlug = trim($this->request->getPost('slug'));

            // SLUG LOGIC
            if (!empty($customSlug)) {
                $slug = $this->uniqueSlug(url_title($customSlug, '-', true), $model);
            } else {
                $slug = $this->generateSlug($title, $model); // auto create from title
            }







            $data = [
                'b_tags' => $this->request->getPost('tags'),
                'b_title' => $title,
                'b_desc' => $this->request->getPost('content'),
                'b_slug' => $slug,
                'published_on' =>  $this->request->getPost('published_on')
            ];

            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads/blogs/', $newName);
                $data['b_img'] = $newName;
            }

            //    echo '<pre>';
            //     print_r($data);
            //     exit;


            $model->insert($data);

            return redirect()->to(base_url('admin/blogs'))->with('success', 'Blog created!');
        }

        return view('admin/blogs/create');
    }


    // AUTO SLUG (first 6 words of title)
    private function generateSlug($title, $model)
    {
        $words = explode(' ', trim($title));
        $firstSix = implode(' ', array_slice($words, 0, 6));

        $baseSlug = strtolower(url_title($firstSix, '-', true));
        return $this->uniqueSlug($baseSlug, $model);
    }


    // UNIQUE SLUG CHECKER
    private function uniqueSlug($baseSlug, $model)
    {
        $slug = $baseSlug;
        $i = 1;

        while ($model->where('b_slug', $slug)->first()) {
            $slug = $baseSlug . '-' . $i;
            $i++;
        }

        return $slug;
    }


    public function edit($id)
    {
        $model = new BlogsModel();
        $blog = $model->find($id);

        if (!$blog) {
            return redirect()->to(base_url('admin/blogs'))->with('error', 'Blog not found!');
        }

        if ($this->request->getMethod() === 'POST') {

            $title = $this->request->getPost('title');
            $customSlug = trim($this->request->getPost('slug'));

            // Slug logic for EDIT
            if (!empty($customSlug)) {
                $slug = $this->uniqueSlug(url_title($customSlug, '-', true), $model);
            } else {
                $slug = $blog['b_slug']; // Keep existing slug if admin didn’t change it
            }

            $data = [
                'b_tags' => $this->request->getPost('tags'),
                'b_title' => $title,
                'b_desc' => $this->request->getPost('content'),
                'b_slug' => $slug,
                'published_on' =>  $this->request->getPost('published_on')
            ];

            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads/blogs/', $newName);
                $data['b_img'] = $newName;
            }

            $model->update($id, $data);

            return redirect()->to(base_url('admin/blogs'))->with('success', 'Blog updated!');
        }

        return view('admin/blogs/edit', ['blog' => $blog]);
    }


    public function delete($id)
    {
        $model = new BlogsModel();
        $model->delete($id);

        return redirect()->to(base_url('admin/blogs'))->with('success', 'Blog deleted!');
    }


    public function view($slug)
    {
        $model = new BlogsModel();
        $blog = $model->where('b_slug', $slug)->first();

        if (!$blog) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Blog not found");
        }

        $blgg = $model->where('id !=', $blog['id'])->orderBy('created_at', 'DESC')->findAll(5);

        return view('web/single_blog', [
            'blog' => $blog,
            'blgg' => $blgg
        ]);
    }
}
