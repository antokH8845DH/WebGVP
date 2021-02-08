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
        $subCategory = $SubCategoryProductModel->join('productcategory', 'productcategory.idProductCategory=productsubcategory.idProductCategory')->where('productsubcategory.active', 'Y')
            ->orderBy('productcategory.category', 'ASC')
            ->findAll();

        $array = ['productdetail.active' => 'Y', 'productimage.active' => 'Y'];
        $productDetailModel = new \App\Models\ProductDetailModel();
        $productImageModel = new \App\Models\ProductImageModel();
        $products = $productDetailModel->join('productsubcategory', 'productsubcategory.idProductSubCategory=productdetail.idProductSubCategory')
            ->join('productimage', 'productimage.idproductdetail=productdetail.idProductDetail')
            ->where($array)->findAll();

        $dataproducts = $productDetailModel->select('productdetail.idProductDetail,productcategory.category,productsubcategory.subCategory,productdetail.product_brand,productdetail.product_name')
            ->join('productsubcategory', 'productsubcategory.idProductSubCategory=productdetail.idProductSubCategory')
            ->join('productcategory', 'productcategory.idProductCategory=productsubcategory.idProductCategory')
            ->where('productdetail.active', 'Y')->findAll();
        // return view('welcome_message');
        $data = [
            'subCategories' => $subCategory,
            'title' => 'Product',
            'products' => $products,
            'categories' => $categories,
            'dataproducts' => $dataproducts,
        ];
        return view('admin/product/view', $data);
    }
    public function Product()
    {
        $categoryProductModel =  new \App\Models\CategoryProductModel();
        $categories =  $categoryProductModel->where('active', 'Y')->findAll();
        $SubCategoryProductModel = new \App\Models\SubCategoryProductModel();
        $subCategory = $SubCategoryProductModel->join('productcategory', 'productcategory.idProductCategory=productsubcategory.idProductCategory')->where('productsubcategory.active', 'Y')
            ->orderBy('productsubcategory.subCategory', 'ASC')
            ->findAll();

        $array = ['productdetail.active' => 'Y', 'productimage.active' => 'Y'];
        $productDetailModel = new \App\Models\ProductDetailModel();
        $productImageModel = new \App\Models\ProductImageModel();
        $products = $productDetailModel->join('productsubcategory', 'productsubcategory.idProductSubCategory=productdetail.idProductSubCategory')
            ->join('productimage', 'productimage.idproductdetail=productdetail.idProductDetail')
            ->where($array)->findAll();
        $data = [
            'subCategories' => $subCategory,
            'title' => 'Product',
            'products' => $products,
            'categories' => $categories,
        ];
        $datainput = $this->request->getPost();
        if ($this->request->getPost()) {
            $this->validation->run($datainput, 'instrument');
            $errors = $this->validation->getErrors();
            $product_images = $this->request->getFileMultiple('product_image');
            $this->validate([
                'product_image' => 'uploaded[product_image]|is_image[product_image]'
            ]);
            $other_images = $this->request->getFileMultiple('other_image');
            $this->validate([
                'other_image' => 'uploaded[other_image]|is_image[other_image]'
            ]);

            // var_dump($datainput);
            // var_dump($product_images);
            // var_dump($other_images);
            // exit;

            if (!$errors) {
                $productEntity = new \App\Entities\ProductDetail();
                $productImageModel = new \App\Models\ProductImageModel();
                // print_r($datainput);
                // exit;
                $productEntity->fill($datainput);
                $productEntity->created_date = date('Y-m-d H:i:s');
                $productEntity->created_by = $this->session->get('id');
                $productDetailModel->save($productEntity);
                $idDetail = $productDetailModel->insertID();
                if ($product_images) {
                    $this->validate([
                        'product_image' => 'uploaded[product_image]|is_image[product_image]'
                    ]);
                    $errors = $this->validation->getErrors();
                    $image = new \App\Entities\productImage();
                    foreach ($product_images as $file) {
                        if (!$errors) {
                            // $Upload->original = $file->getName();
                            $name = $file->getRandomName();
                            $file->move('/Image/Product', $name);
                            $image->idProductDetail = $idDetail;
                            $image->img = $name;
                            $image->info = 'product';
                            $image->created_date = date('Y-m-d H:i:s');
                            $image->created_by = $this->session->get('id');
                            $productImageModel->save($image);
                        } else {
                            $this->session->setFlashdata('errors', $errors);

                            return view('admin/product/addProduct', $data);
                        }
                    }
                }
                if ($other_images) {
                    $this->validate([
                        'other_image' => 'uploaded[other_image]|is_image[other_image]'
                    ]);
                    $image2 = new \App\Entities\productImage();
                    $errors = $this->validation->getErrors();
                    if (!$errors) {
                        foreach ($other_images as $other) {
                            $name2 = $other->getRandomName();
                            $other->move('/Image/Product', $name2);
                            $image2->idProductDetail = $idDetail;
                            $image2->img = $name2;
                            $image2->info = 'otherInfo';
                            $image2->created_date = date('Y-m-d H:i:s');
                            $image2->created_by = $this->session->get('id');
                            $productImageModel->save($image2);
                        }
                    } else {
                        $this->session->setFlashdata('errors', $errors);
                        return view('admin/product/addProduct', $data);
                    }
                }
            }
            $this->session->setFlashdata('errors', $errors);
        }
        return view('admin/product/addProduct', $data);
    }
    public function addProduct()
    {
        $productDetailModel = new \App\Models\ProductDetailModel();
        $data = $this->request->getPost();
        print_r($data);
        exit;
        if ($this->request->getPost()) {
            $this->validation->run($data, 'add_product');
            $errors = $this->validation->getErrors();
            if (!$errors) {
                $productEntity = new \App\Entities\ProductDetail();
            }
        }
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
