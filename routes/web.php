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

// Panier

Route::get('cart', function(){
    return view ('Cart.cart');
});

Route::get('add-to-cart/{id}', 'CartController@addToCart');

    // Contacts

//Route::get('/contacts', 'PageController@contacts');
Route::get('/contacts/{id}', 'PageController@contact');


// Admin

Route::get('/admin', 'PageController@admin');
Route::get('/admin/{id}', 'productController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/auth', function(){
    return view('auth.login');
});



