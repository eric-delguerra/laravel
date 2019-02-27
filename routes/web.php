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
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/basket', function () {
    return view('orders/basket');
});
Route::get('/products', function () {
    return view('products/products');
});
Route::resource('product', 'productController');
Route::get('/', 'PageController@index');

route::get('/contactMel', function(){
    return view('/contact-mel');

});