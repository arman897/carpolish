<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BrandsModel;
use CodeIgniter\HTTP\ResponseInterface;

class BrandsController extends BaseController
{
    public function index()
    {
        echo 'list';
    }
    public function create()
    {

        helper('form');
        $session = session();

        if ($this->request->getMethod() === 'POST') {
            $image = \Config\Services::image();

            if ($this->validate(
                [
                    'logo' => 'uploaded[logo]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png,image/webp]|max_size[logo, 2048]',
                    'name' => 'required|max_length[124]',
                ],
                [
                    'logo' => [
                        // 'required'=>'Please upload a image',
                        'uploaded' => 'Please upload an Logo image',
                        'is_image' => 'Please upload a valid Image type of Logo Image',
                        'mime_in' => 'Please upload a valid image type of Logo Image',
                        'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Logo Image'
                    ],

                    'name' => [
                        'required' => 'Please fill Brand Name',
                        'max_length' => 'Brand Name is too long',
                    ],

                ]
            )) {


                $slug = $this->create_slug($this->request->getPost('name'));


                $brandModel = new BrandsModel;
                $checkSlug = $brandModel->checkSlug($slug);



                $logoFile = $this->request->getFile("logo");
                if (trim($logoFile) !== '') {
                    // $file = $this->request->getFile("slider_image");
                    $thumbnail = $logoFile->getName();
                    // Renaming file before upload
                    $temp = explode(".", $thumbnail);

                    $tourFileName = round(microtime(true)) . '.' . end($temp);
                    $tourFileName = "Brand-" . $tourFileName;
                }
                $image->withFile($logoFile)->save('uploads/brands/' . $tourFileName, 70);

                $result = $brandModel->save([
                    'logo' => $tourFileName,
                    'name' => $this->request->getPost('name'),
                    'slug' => $checkSlug,
                ]);


                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'You have successfully Add a Brand', "type" => "success"]);
                    return redirect()->to(site_url("admin/brands"));
                } else {
                    $session->setFlashdata('invalid_creds',  ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);
                    return redirect()->to(site_url("admin/brands/create"));
                }
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->back()->withInput();
            }
        } else {
            return view('admin/brands/create');
        }
    }
}
