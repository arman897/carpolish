<?php

namespace App\Controllers;

use App\Models\BlogsModel;

use App\Models\ContactModel;



class Home extends BaseController
{
    public function index()
    {
        $model = new BlogsModel();
        $data = $model->findAll();


        return view('web/index', ['blg' => $data]);
    }
    public function single_blog($id)
    {
        $model = new BlogsModel();
        $blog = $model->find($id);
        $model = new \App\Models\BlogsModel();
        $recentPosts = $model->orderBy('created_at', 'DESC')->findAll(5);


        // echo'<pre>';
        // print_r($data);
        // exit;

        if ($this->request->getMethod() === 'POST') {

            $data = [
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
                'phone'    => $this->request->getPost('phone'),
                'message'  => $this->request->getPost('message'),
            ];

            // echo '<pre>';
            // print_r($data);
            // exit;
            $contactM = new ContactModel();

            $contactM->save($data);
            return redirect()->back()->with('success', 'Your message has been sent!');
        }


        return view('web/single_blog', [
            'blog' => $blog,
            'blgg' => $recentPosts
        ]);
    }



    public function services(): string
    {
        return view('web/services');
    }


    public function test(): string
    {
        return view('web/test');
    }


    public function before_after(): string
    {
        return view('web/before_after');
    }


    public function contact()
    {
        if ($this->request->getMethod() === 'POST') {

            $data = [
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
                'phone'    => $this->request->getPost('phone'),
                'message'  => $this->request->getPost('message'),
            ];

            // echo '<pre>';
            // print_r($data);
            // exit;
            $contactM = new ContactModel();

            $contactM->save($data);
            return redirect()->to(base_url('contact_us'))->with('success', 'Your message has been sent!');
        }

        return view('web/contact_us');
    }





    public function blogs()
    {
        $model = new BlogsModel();
        $data = $model->orderBy('published_on', 'DESC')->findAll();


        return view('web/blogs', ['blg' => $data]);
    }

    public function show($id)
    {


        // echo "<pre>";
        // print_r($blog);
        // print_r($data);
        // exit;

        if (!$blog) {
            // Blog not found, show error or redirect
            return redirect()->to('web/blogs')->with('error', 'Blog not found!');
        }

        // Pass blog data to the view
        // Pass both blog data sets to the view

    }
}
