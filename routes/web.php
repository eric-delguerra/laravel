<?php

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
Route::get('/basket', function () {
    return view('basket');
});
Route::get('/products', function () {
    return view('products/products');
});
Route::get('/product/{id?}', function ($id = null) {
//    if ($id = null) {
//        return view('products.product', [
//            'y'=> 'produit'
//        ]);
//    }
//    else {
        return view('products/product', [
            'x'=> $id
        ]);
//    }
});
