<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SliderModel;

class SliderController extends BaseController
{
    protected SliderModel $sliderModel;
    protected string $uploadPath;

    public function __construct()
    {
        helper(['form', 'url', 'filesystem']);
        $this->sliderModel = new SliderModel();

        // Use public uploads so images are web-accessible
        $this->uploadPath = 'uploads/sliders/';

        // Ensure upload directory exists (public/uploads/sliders)
        if (!is_dir($this->uploadPath)) {
            mkdir($this->uploadPath, 0755, true);
        }
    }

    /**
     * List sliders
     */
    public function index()
    {
        $sliderData = $this->sliderModel->findAll();
        return view('admin/slider/index', ['slider' => $sliderData]);
    }

    /**
     * Show create form (GET) / Store new slider (POST)
     */
    public function create()
    {
        // If GET -> show the form
        if ($this->request->getMethod() !== 'POST') {
            return view('admin/slider/create');
        }

        // POST -> handle form submit
        $rules = [
            'title' => 'permit_empty|max_length[255]',
            'subtitle' => 'permit_empty|max_length[255]',
            'link' => 'permit_empty|valid_url',
            'is_active' => 'permit_empty|in_list[0,1]',
            'banner_image' => 'uploaded[banner_image]|is_image[banner_image]|max_size[banner_image,4096]|mime_in[banner_image,image/jpg,image/jpeg,image/png,image/webp]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'link' => $this->request->getPost('link'),
            // handle checkbox/toggle for is_active (may be absent)
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        // Handle upload to WRITEPATH/public/uploads/sliders/ or public/uploads/sliders/
        // ensure $this->uploadPath exists
        if (!is_dir($this->uploadPath)) {
            if (!@mkdir($this->uploadPath, 0755, true)) {
                log_message('error', "Could not create upload directory: {$this->uploadPath}");
                return redirect()->back()->withInput()->with('error', 'Unable to create upload directory.');
            }
        }

        $file = $this->request->getFile('banner_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            try {
                $file->move($this->uploadPath, $newName);
                // store web-relative path (adjust if your web root differs)
                $data['banner_image'] = 'uploads/sliders/' . $newName;
            } catch (\Exception $e) {
                log_message('error', 'Slider upload failed: ' . $e->getMessage());
                return redirect()->back()->withInput()->with('error', 'Failed to upload banner image.');
            }
        }

        $insertId = $this->sliderModel->insert($data);
        if ($insertId === false) {
            // collect DB errors if any (optional)
            $dbError = $this->sliderModel->errors() ?? [];
            return redirect()->back()->withInput()->with('error', 'Failed to create slider.')->with('db_errors', $dbError);
        }

        return redirect()->to(site_url('admin/sliders'))->with('success', 'Slider created successfully.');
    }


    /**
 * Show edit form (GET) / Update slider (POST)
 */
public function edit($id = null)
{
    if ($id === null) {
        return redirect()->to(route_to('admin.slider.index'))->with('error', 'Invalid slider ID.');
    }

    $slider = $this->sliderModel->find($id);
    if (! $slider) {
        return redirect()->to(route_to('admin.slider.index'))->with('error', 'Slider not found.');
    }

    // If GET -> show form
    if ($this->request->getMethod() !== 'POST') {
        return view('admin/slider/edit', ['slider' => $slider]);
    }

    // POST -> handle update
    $rules = [
        'title'        => 'permit_empty|max_length[255]',
        'subtitle'     => 'permit_empty|max_length[255]',
        'link'         => 'permit_empty|valid_url',
        'is_active'    => 'permit_empty|in_list[0,1]',
        'banner_image' => 'is_image[banner_image]|max_size[banner_image,4096]|mime_in[banner_image,image/jpg,image/jpeg,image/png,image/webp]',
        'remove_image' => 'permit_empty|in_list[0,1]',
    ];

    if (! $this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $data = [
        'title'     => $this->request->getPost('title'),
        'subtitle'  => $this->request->getPost('subtitle'),
        'link'      => $this->request->getPost('link'),
        'is_active' => $this->request->getPost('is_active') ? 1 : 0,
    ];

    // Ensure upload directory exists
    if (! is_dir($this->uploadPath)) {
        if (! @mkdir($this->uploadPath, 0755, true)) {
            log_message('error', 'Could not create upload directory: ' . $this->uploadPath);
            return redirect()->back()->withInput()->with('error', 'Unable to create upload directory.');
        }
    }

    // Handle new uploaded image (replace old one)
    $file = $this->request->getFile('banner_image');
    if ($file && $file->isValid() && ! $file->hasMoved()) {
        $newName = $file->getRandomName();
        try {
            $file->move($this->uploadPath, $newName);
            $data['banner_image'] = 'uploads/sliders/' . $newName;

            // Delete previous file (if exists and within uploads/sliders)
            if (! empty($slider['banner_image'])) {
                $old = FCPATH . $slider['banner_image'];
                if (is_file($old)) {
                    @unlink($old);
                }
            }
        } catch (\Exception $e) {
            log_message('error', 'Slider upload failed on update: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Failed to upload new image.');
        }
    }

    // Optional: remove existing image if checkbox/toggle sent
    if ($this->request->getPost('remove_image')) {
        if (! empty($slider['banner_image'])) {
            $old = FCPATH . $slider['banner_image'];
            if (is_file($old)) {
                @unlink($old);
            }
        }
        // set to null or empty depending on DB column nullability
        $data['banner_image'] = null;
    }

    $updated = $this->sliderModel->update($id, $data);
    if ($updated === false) {
        return redirect()->back()->withInput()->with('error', 'Failed to update slider.');
    }

    return redirect()->to(site_url('admin/sliders'))->with('success', 'Slider updated successfully.');
}



    /**
     * Delete a slider
     */
    public function delete($id = null)
    {
        if ($id === null) {
            return redirect()->to(route_to('admin.slider.index'))->with('error', 'Invalid slider ID.');
        }

        $slider = $this->sliderModel->find($id);
        if (!$slider) {
            return redirect()->to(route_to('admin.slider.index'))->with('error', 'Slider not found.');
        }

        // Delete the DB record
        $deleted = $this->sliderModel->delete($id);

        if ($deleted === false) {
            return redirect()->back()->with('error', 'Failed to delete slider.');
        }

        // Remove the banner image file (if exists inside public/uploads/sliders)
        if (!empty($slider['banner_image'])) {
            $oldPath = FCPATH . $slider['banner_image'];
            if (is_file($oldPath)) {
                @unlink($oldPath);
            }
        }

        return redirect()->to(site_url('admin/sliders'))->with('success', 'Slider deleted successfully.');
    }
}
