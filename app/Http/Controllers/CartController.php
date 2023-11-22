<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart() {
        
    }
    public function cart() {
        return view('components.cart' , ['products' => Products::select('id')]);
    }
}
