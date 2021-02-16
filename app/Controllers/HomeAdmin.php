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
        $categoryProductModel =  new \App\Models\CategoryProductModel();
        $categories =  $categoryProductModel->where('active', 'Y')->findAll();
        $SubCategoryProductModel = new \App\Models\SubCategoryProductModel();
        $products = $SubCategoryProductModel->join('productcategory', 'productcategory.idProductCategory=productsubcategory.idProductCategory')->where('productsubcategory.active', 'Y')
            ->orderBy('productcategory.category', 'ASC')
            ->findAll();

        $data = [
            'title' => 'Product',
            'products' => $products,
            'categories' => $categories,
        ];
        // return view('welcome_message');
        return view('admin/product/index', $data);
    }
}
