<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Home;
use App\Models\Admin;
use Hash;
use Session;


class ProductController3 extends Controller
{
    public function index()
    {
        return view('legoshop.home');
    }

    public function getProducts()
    {
        $data = Product::get();
        return view('legoshop.products', compact('data'));
    }
    public function getHome()
    {
        $data = Product::get();
        return view('legoshop.home', compact('data'));
    }
}

