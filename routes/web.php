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

Route::get('/basket', function () {
    return view('orders/basket');
});
Route::get('/products', function () {
    return view('products/products');
});
Route::resource('product', 'productController');
Route::get('/', 'PageController@index');
Route::get('/contacts/{id}', 'PageController@contact');
Route::get('/contacts', 'PageController@index');