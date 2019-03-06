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
// Acceuil

Route::get('/', 'PageController@index');

// Produits

Route::get('/products', 'productController@index');
Route::resource('/product', 'productController');
Route::get('products/pinard', function(){
    return view('products/LayoutProd');
});

// Panier

Route::get('/basket', function () {
    return view('orders/basket');
});

// Contacts

//Route::get('/contacts', 'PageController@contacts');
Route::get('/contacts/{id}', 'PageController@contact');


// Admin

Route::get('/admin', 'PageController@admin');
Route::get('/admin/{id}', 'PageController@adminCreate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/auth', function(){
    return view('auth.login');
});
