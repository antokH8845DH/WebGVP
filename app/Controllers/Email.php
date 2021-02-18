<?php

namespace App\Controllers;


class Email extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->email = \Config\Services::email();
    }
    public function sendEmail()
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
