<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$categoryProductModel =  new \App\Models\CategoryProductModel();
		$catentity = new \App\Entities\CategoryProduct();
		$subCategoryProductModel = new \App\Models\SubCategoryProductModel();
		$categories =  $categoryProductModel->where('active', 'Y')->findAll();
		$subCategory = $subCategoryProductModel->join('productcategory', 'productcategory.idProductCategory=productsubcategory.idProductCategory')->where('productsubcategory.active', 'Y')
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
		// return ($data);
		// return view('welcome_message');
		return view('index', $data);
	}
	public function admin()
	{

		// return view('welcome_message');
		return view('admin/index');
	}

	//--------------------------------------------------------------------

}
