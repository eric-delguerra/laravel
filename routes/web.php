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

Route::group(['prefix'=>'admin'],function (){
    Route::get('/', 'PageController@admin');
    Route::post('/', 'productController@store');
    Route::get('/{id}', 'productController@create');
    Route::resource('/product', 'productController') ;

});

// Acceuil

Route::get('/', 'PageController@index');

// Produits

Route::get('/products', 'productController@index');

//Promo
//Route::resource('/admin/promo', );
//Route::resource('/promo', 'productController');

// Panier

Route::get('/basket', function () {
    return view('orders/basket');
});

// Contacts

//Route::get('/contacts', 'PageController@contacts');
Route::get('/contacts/{id}', 'PageController@contact');


// Admin


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/auth', function(){
    return view('auth.login');
});
