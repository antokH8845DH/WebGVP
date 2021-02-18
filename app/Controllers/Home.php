<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		// helper('form');
		$this->validation = \Config\Services::validation();
		$this->email = \Config\Services::email();
		$this->session = session();
	}
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
	public function sendEmail()
	{
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			// print_r($data);
			// exit;
			$emailModel = new \App\Models\EmailModel();
			$email = new \App\Entities\Email();
			$email->fill($data);
			$email->created_date = date('Y-m-d H:i:s');
			$emailModel->save($email);
			$this->email->setFrom('customer.service@gvp.co.id', 'Customer Service PT. Gracia Visi Pratama');
			// $this->email->setTo('customer.service@gvp.co.id');
			$this->email->setCC('cs.marketing@gvp.co.id');
			// $this->email->setBCC('them@their-example.com');
			$message = $this->request->getPost('message');
			$emaildari = $this->request->getPost('email');
			$this->email->setSubject($this->request->getPost('subject'));
			$this->email->setMessage('mohon ditindak lanjuti permintaan dari web contact dari email : ' . $emaildari . '<br>dengan pesan: ' . $message . '<br>Terima kasih');
			$this->email->send();
			//kirim balik ke email yang bersangkutan
			$this->email->setFrom('customer.service@gvp.co.id', 'Customer Service PT. Gracia Visi Pratama');
			$this->email->setTo($emaildari);
			$this->email->setSubject('Terima Kasih (no reply)');
			$name = $this->request->getPost('name');
			$this->email->setMessage('Kepada Bpk./Ibu ' . $name . '<br><br>Salam Hormat, <br>Terima kasih atas kunjungannya di web PT. Gracia Visi Pratama dan untuk permintaan : <b><br>"'
				. $message . '"</b>. <br>Kami akan segera menindak lanjuti permohonan Bapak/Ibu.
			<br>Terima Kasih dan selamat beraktivitas
			<br><br><br>Salam Hormat Kami,<br><br><b>CS Suport<br>PT.Gracia Visi Pratama');
			$kirim = $this->email->send();

			//echo $kirim;
			echo 'OK';
		}
	}
	public function testEmail()
	{
		$email_smtp = \Config\Services::email();

		$email_smtp->setFrom("customer.service@gvp.co.id", "Customer Service (noRepply)");
		$email_smtp->setTo("antok.acb@gmail.com");

		$email_smtp->setSubject("Ini subjectnya");
		$email_smtp->setMessage("Ini isi/body email");

		// $config["protocol"] = "smtp";
		// //isi sesuai nama domain/mail server 
		// $config["SMTPHost"] = "gvp.co.id"; //alamat email SMTP 
		// $config["SMTPUser"] = "customer.service@gvp.co.id"; //password email SMTP 
		// $config["SMTPPass"] = "ServiceCustomer123";
		// $config["SMTPPort"] = 465;
		// $config["SMTPCrypto"] = "ssl";
		// $email_smtp->initialize($config);
		// $email_smtp->setFrom("customer.service@gvp.co.id", "Nama Pengirim");
		// $email_smtp->setTo("customer.service@gvp.co.id");
		// $email_smtp->setSubject("Ini subjectnya");
		// $email_smtp->setMessage("Ini isi/body email");
		// $email_smtp->send();
		$email_smtp->send();
		if ($email_smtp) {
			echo 'email sent';
		} else {
			echo 'email not sent';
		}
	}
}
