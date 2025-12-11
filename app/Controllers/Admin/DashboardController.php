<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    public function dashboard()
    {
        // $session = session();
        // print_r ($_SESSION['admin_auth']);
        // exit;

        return view('admin/dashboard');
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to(base_url('/admin'));
    }
}
