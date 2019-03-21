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
 // ********************   ADMIN   ********************** //

Route::group(['prefix'=>'admin'],function (){
    Route::get('/', 'AdminController@index');
    Route::post('/', 'AdminController@store');
    Route::get('/create', 'AdminController@create');
    Route::resource('/product', 'AdminController');
    Route::get('/promo', 'promoController@index' );
    Route::resource('/promo', 'promoController');
});


// ********************   Utilisateur   ********************** //

// Acceuil

Route::get('/', 'PageController@index');

// Produits

Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');

// Panier

Route::get('/basket', function () {
    return view('orders/basket');
});

// Contacts

//Route::get('/contacts', 'PageController@contacts');
Route::get('/contacts/{id}', 'PageController@contact');

