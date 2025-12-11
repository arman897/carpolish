<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function log_in()
    {
        $loginValue = $this->request->getPost('email');
        $password   = md5($this->request->getPost('password')); // MD5 HASH

        if (!$loginValue || !$password) {
            return $this->response->setJSON([
                'status'  => false,
                'type'    => 'validation',
                'message' => 'Email/Username/Phone and password are required.'
            ]);
        }

        $userModel = new AdminModel();

        // Try login through email / phone / username
        $user = $userModel
            ->groupStart()
            ->where('email', $loginValue)
            ->orWhere('phone', $loginValue)
            ->orWhere('username', $loginValue)
            ->groupEnd()
            ->first();

        // echo '<pre>';
        // print_r($user);
        // exit;


        if (!$user) {
            return $this->response->setJSON([
                'status'  => false,
                'type'    => 'auth',
                'message' => 'Invalid login credentials.'
            ]);
        }

        // MD5 PASSWORD CHECK (Correct for your case)
        if ($password !== $user['password']) {
            return $this->response->setJSON([
                'status'  => false,
                'type'    => 'auth',
                'message' => 'Invalid login credentials.'
            ]);
        }




        $session = session();
        $user_data = [
            'id'       => $user['id'],
            'username' => $user['username'],
            'email'    => $user['email'],
            'phone'    => $user['phone'],
        ];
        $session->set('admin_auth', $user_data);



        // Login successful
        return $this->response->setJSON([
            'status'  => true,
            'message' => 'Login successful.',
            'user'    => [
                'id'       => $user['id'],
                'username' => $user['username'],
                'email'    => $user['email'],
                'phone'    => $user['phone'],
                // 'name'     => $user['name'],
            ],
            'token' => bin2hex(random_bytes(20))
        ]);
    }
}
