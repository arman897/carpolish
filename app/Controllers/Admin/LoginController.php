<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function log_in()
    {
        if ($this->request->getMethod() === 'GET') {
            return view('admin/login');
        }
    }
}
