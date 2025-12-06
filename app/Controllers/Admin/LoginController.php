<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function log_in()
    {
        if ($this->request->getMethod() === 'GET') {
            return view('admin/log_in');
        } else {
            $username = $this->request->getPost('username');
            $password = md5($this->request->getPost('password'));
            $UserM = new AdminModel();


            $result = $UserM->where([
                'username' => $username,
                'password' => $password
            ])->first();

            if (!empty($result)) {
                return redirect()->to('admin/dashboard');
            } else {
                echo 'credential mismatched';
            }
        }
    }
}
