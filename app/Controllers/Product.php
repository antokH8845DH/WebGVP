<?php

namespace App\Controllers;

class Product extends BaseController
{
    // public function index()
    // {
    // 	// return view('welcome_message');
    // 	return view('index');
    // }

    //--------------------------------------------------------------------
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = session();
        helper('form');
    }
    public function addCategory()
    {

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            // print_r($data);
            // exit;
            $validate = $this->validation->run($data, 'add_product');
            $errors = $this->validation->getErrors();
            if (!$errors) {
                $subCategoryProductModel = new \App\Models\SubCategoryProductModel();
                $category =  new \App\Entities\SubCategoryProduct();
                $category->fill($data);
                $category->active = 'Y';
                $category->created_by = $this->session->get('id');
                $category->created_date = date("Y-m-d H:i:s");
                // print_r($category);
                // exit;
                $save = $subCategoryProductModel->save($category);
                if ($save) {
                    $this->session->setFlashdata('success', "Data Telah di Simpan");
                }
                return redirect()->to(site_url('HomeAdmin/view'));
            }
            $this->session->setFlashdata('errors', $errors);
        }
        return redirect()->to(site_url('HomeAdmin/view'));
    }
    public function view()
    {
        $categoryProductModel =  new \App\Models\CategoryProductModel();
        $categories =  $categoryProductModel->where('active', 'Y')->findAll();
        $SubCategoryProductModel = new \App\Models\SubCategoryProductModel();
        $subCategory = $SubCategoryProductModel->join('productcategory', 'productcategory.id=idProductCategory')->where('productsubcategory.active', 'Y')
            ->orderBy('productcategory.category', 'ASC')
            ->findAll();

        $array = ['productdetail.active' => 'Y', 'productimage.active' => 'Y'];
        $productDetailModel = new \App\Models\ProductDetailModel();
        $productImageModel = new \App\Models\ProductImageModel();
        $products = $productDetailModel->join('productsubcategory', 'productsubcategory.id=idProductSubCategory')
            ->join('productimage', 'productimage.idproductdetail=productdetail.id')
            ->where($array)->findAll();
        $data = [
            'subCategories' => $subCategory,
            'title' => 'Product',
            'products' => $products,
            'categories' => $categories,
        ];
        // return view('welcome_message');
        return view('admin/product/view', $data);
    }
    public function Product()
    {
        $categoryProductModel =  new \App\Models\CategoryProductModel();
        $categories =  $categoryProductModel->where('active', 'Y')->findAll();
        $SubCategoryProductModel = new \App\Models\SubCategoryProductModel();
        $subCategory = $SubCategoryProductModel->join('productcategory', 'productcategory.id=idProductCategory')->where('productsubcategory.active', 'Y')
            ->orderBy('productcategory.category', 'ASC')
            ->findAll();

        $array = ['productdetail.active' => 'Y', 'productimage.active' => 'Y'];
        $productDetailModel = new \App\Models\ProductDetailModel();
        $productImageModel = new \App\Models\ProductImageModel();
        $products = $productDetailModel->join('productsubcategory', 'productsubcategory.id=idProductSubCategory')
            ->join('productimage', 'productimage.idproductdetail=productdetail.id')
            ->where($array)->findAll();
        $data = [
            'subCategories' => $subCategory,
            'title' => 'Product',
            'products' => $products,
            'categories' => $categories,
        ];
        // return view('welcome_message');
        return view('admin/product/addProduct', $data);
    }

    public function d5crp()
    {
        return view('product/D5CRP');
    }
    public function dh36()
    {
        return view('product/DH36');
    }
    public function a1000()
    {
        return view('product/A1000');
    }
    public function a2000plus()
    {
        return view('product/A2000plus');
    }
    public function ms480()
    {
        return view('product/MS480');
    }
    public function h900()
    {
        return view('product/H900');
    }
}
