<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::resource('/products','ProductController');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('viewproducts');
});
Route::get('/products/create', function () {
    return view('createproduct');
});
Route::get('/products/update', function () {
    return view('updateproduct');
});

Route::get('/products',[ProductController::class,'index']);
Route::get('/products/update',[ProductController::class,'index']);

Route::post('/products/create',[ProductController::class,'store']);