<?php

namespace App\Controllers;

class Tampilan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function index()
    {
        // return view('welcome_message');
        return view('admin/tampilan/header');
    }


    //--------------------------------------------------------------------

    public function header()
    {
        $HeaderImageModel = new \App\Models\HeaderImageModel();
        // $header = $HeaderImageModel->where('active=', 'Y')->findAll();
        $header = $HeaderImageModel->findAll();
        $data = ['headers' => $header,];
        return view('admin/tampilan/header', $data);
    }

    public function addHeader()
    {
        $post = $this->request->getPost();
        // $images = $this->request->getFileMultiple('product_image');
        $HeaderImages = $this->request->getFileMultiple('header_images');
        // print_r($HeaderImages);
        // // print_r($images);
        // exit;
        if ($HeaderImages) {

            $img1 = $this->request->getFile('header_images.0');
            // print_r($HeaderImages);
            // print_r($img1);
            // exit;
            if ($img1->getName() <> '') {
                $this->validate([
                    'header_image' => 'uploaded[header_images]|is_image[header_images]'
                ]);
                $errors = $this->validation->getErrors();
                if (!$errors) {
                    $HeaderImageModel = new \App\Models\HeaderImageModel();
                    $image = new \App\Entities\HeaderImage();
                    $header = $HeaderImageModel->where('active=', 'Y')->orderBy('order', 'ASC')->first();
                    if ($header) {
                        $order = $header->order;
                        $order = $order + 1;
                    } else {
                        $order = 1;
                    }
                    foreach ($HeaderImages as $header) {
                        $image->original = $header->getName();
                        $name = $header->getRandomName();
                        $header->move('./Image/Headers', $name);
                        $image->order = $order;
                        $image->image = $name;
                        $image->created_date = date('Y-m-d H:i:s');
                        $image->created_by = $this->session->get('id');
                        $HeaderImageModel->save($image);
                    }
                } else {
                    $this->session->setFlashdata('errors', $errors);
                    return redirect()->to(site_url('Tampilan/header'));
                }
            }
        }
        return redirect()->to(site_url('Tampilan/header'));
    }
    public function editHeader()
    {
        $idHeaderImage = $this->request->uri->getSegment(3);
        // print($idHeaderImage);
        $post = $this->request->getPost('active');
        if ($post == 'Y') {
            $active = 'Y';
        } else {
            $active = 'N';
            // echo 'togle tidak aktif';
        }
        // print_r(($post));
        // exit;
        $HeaderImageModel = new \App\Models\HeaderImageModel();;
        $HeaderImageModel->set([
            'active' => $active,
            'updated_date' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->get('id'),
        ])->where('idHeaderImage=', $idHeaderImage)->update();
        return redirect()->to(site_url('Tampilan/header'));
    }
}
