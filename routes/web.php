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
    Route::get('/categories', 'AdminController@categories');
    Route::get('/categories/new', 'AdminController@categoriesNew');
    Route::get('categories/delete/{id}', 'AdminController@categoriesDelete');
    Route::get('categories/update/{id}', 'AdminController@categoriesUpdateForm');
    Route::post('categories/update/{id}', 'AdminController@categoriesUpdate');
    Route::post('/categories/new', 'AdminController@categoriesNewStore');
    Route::get('/{id}', 'AdminController@create');
    Route::resource('/product', 'AdminController');

});


// ********************   Utilisateur   ********************** //

// Acceuil

Route::get('/', 'PageController@index');

// Produits

Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');

// Panier

Route::get('cart', function(){
    return view ('Cart.cart');
});

Route::get('add-to-cart/{id}', 'CartController@addToCart');

    // Contacts

//Route::get('/contacts', 'PageController@contacts');
Route::get('/contacts/{id}', 'PageController@contact');

//formulaire de contact
Route::get('/auth/Form', 'FormController@create');
Route::post('/auth/Form/result', 'FormController@store');

Route::get('/patate', 'FormController@index');