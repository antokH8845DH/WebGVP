<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('index');
	}
	public function admin()
	{
		// return view('welcome_message');
		return view('admin/index');
	}

	//--------------------------------------------------------------------

}
