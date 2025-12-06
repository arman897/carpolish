<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MessageModel;
use App\Models\Settings;
use App\Models\AdminModel;

class DashboardController extends BaseController
{

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function logout()
    {
        return redirect()->to(base_url('/admin'));
    }
}
