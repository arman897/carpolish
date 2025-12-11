<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SliderModel;
use CodeIgniter\HTTP\ResponseInterface;

class SliderController extends BaseController
{
    public function index()
    {
        $sliderModel = new SliderModel();
        $sliderData = $sliderModel->findAll();

        return view('admin/slider/index', ['slider' => $sliderData]);
    }

    public function create()
    {
        helper('form');
        return view('admin/slider/create');
    }
}
