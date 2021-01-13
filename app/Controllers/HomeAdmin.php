<?php

namespace App\Controllers;

use app\Models\SubCategoryProductModel;
use app\Models\CategoryProductModel;

class HomeAdmin extends BaseController
{
    public function __construct()
    {
        helper('form');
        // $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function index()
    {
        // return view('welcome_message');
        return view('admin/index');
    }

    //--------------------------------------------------------------------
    public function view()
    {
        $SubCategoryProductModel = new \App\Models\SubCategoryProductModel();
        $products = $SubCategoryProductModel->where('active', 'Y')->findAll();

        $data = [
            'title' => 'Product',
            'products' => $products,
        ];
        // return view('welcome_message');
        return view('admin/product/index', $data);
    }
}
