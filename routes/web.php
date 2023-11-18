<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Homepage
Route::get('/', [StoreController::class, 'index']);

//Registration
Route::get('/register', [StoreController::class, 'register']);

//Login
Route::get('/login', [StoreController::class, 'login']);