<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adminpage() {
        return view('components.adminpage');
    }

    public function manageproduct() {
        return view('components.adminmanageprod');
    }
}
