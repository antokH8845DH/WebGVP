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
