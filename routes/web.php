<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controller\AboutContoller;
use App\Http\Controller\ProductsController;
use App\Http\Controller\StoreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/store', function () {
    return view('store');
});