<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        return view('store.index');
    }
    public function register() {
        return view('components.register');
    }
    public function login() {
        return view('components.login');
    }
    
}
