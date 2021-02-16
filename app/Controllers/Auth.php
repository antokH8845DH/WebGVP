<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
        // $this->load->view('home/index');
    }

    public function register()
    {


        if ($this->request->getPost()) {
            // $data = $this->request->getPost();
            // print_r($data);
            // exit();
            //lakukan validasi untuk data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();

            //jika tidak ada errors jalanakan
            if (!$errors) {
                // 
                $userModel = new \App\Models\UserModel();

                $user = new \App\Entities\User();

                $user->name = $this->request->getPost('username');
                $user->username = $this->request->getPost('username');
                $user->password = $this->request->getPost('password');
                $user->active = "Y";
                $user->role = "2";

                $user->created_by = 1;
                $user->created_date = date("Y-m-d H:i:s");

                $userModel->save($user);
                // $data = $this->request->getPost();
                // print_r($user);
                // exit();
                return view('index');
            }

            $this->session->setFlashdata('errors', $errors);
        }
        return view('register');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            //lakukan validasi untuk data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'login');
            $errors = $this->validation->getErrors();

            if ($errors) {
                return view('login');
            }

            $userModel = new \App\Models\UserModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                $salt = $user->salt;
                if ($user->password !== md5($salt . $password)) {
                    $this->session->setFlashdata('errors', ['Password Salah']);
                } else {
                    $sessData = [
                        'username' => $user->username,
                        'id' => $user->id,
                        'role' => $user->role,
                        'isLoggedIn' => TRUE,
                        'avatar' => $user->avatar,
                        'role' => $user->role,
                    ];

                    $this->session->set($sessData);
                    $role = $this->session->role;
                    if ($role == '0') {
                        return redirect()->to(base_url('home/admin'));
                    }

                    return redirect()->to(site_url('home'));
                }
            }
            // else {
            //     $this->session->setFlashdata('errors', ['User Tidak Ditemukan']);
            // }
            return view('login');
        }
        return view('login');
        // return redicet()->to(base_url('Auth/Login'));
        // return view(base_url('auth/login'));
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('index'));
    }
}
