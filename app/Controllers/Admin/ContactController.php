<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactModel;


class ContactController extends BaseController
{
    public function message(){
        $ContactModel = new ContactModel();
        $messages = $ContactModel->findAll();
        return view('admin/message', ['msg' => $messages]);
    }
    
    public function delete($id)
    {
        $ContactModel = new ContactModel();

        // Check if the message exists
        $message = $ContactModel->find($id);
        if ($message) {
            $ContactModel->delete($id); // Delete the message
            
        } 

        return redirect()->to(base_url('admin/Message'));
    }

}