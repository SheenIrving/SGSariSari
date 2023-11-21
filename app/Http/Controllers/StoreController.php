<?php

namespace App\Http\Controllers;




use App\Models\Products;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        return view('store.index' , ['products' => Products::all()]);
    }

    public function register() {
        return view('components.register');
    }
    public function login() {
        return view('components.login');
    }
    public function about() {
        return view('components.aboutus');
    }
    
    public function product(Products $product) {
        return view('store.product' , [
            'product' => $product
        ]);
    }
}
