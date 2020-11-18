<?php

use Illuminate\Support\Facades\Route;
use App\Controller\ProductController;
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
Route::get('/products/delete', function () {
    return view('deleteproduct');
});
Route::post('/products/create',[ProductController::class,'store']);


