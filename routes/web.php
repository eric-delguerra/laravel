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

Route::group(['prefix'=>'admin'],function ()
{
    Route::get('/', 'AdminController@index');
    Route::post('/', 'AdminController@store');
    // Route::get('/{id}', 'AdminController@create');
    Route::get('/create', 'AdminController@create');
    Route::resource('/product', 'AdminController');
    /* Routes Category !!! Fini: Ne surtout pas effacer !!! */
    Route::get('/category', 'CategoryController@index');
    // Route::get('/category/edit', 'CategoryController@edit');
    // Route::post('/category', 'CategoryController@index');
    Route::post('/', 'CategoryController@store');
    Route::resource('/category', 'CategoryController');

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

/* Contacts !!! a finir !!! */
//Route::get('/contacts', 'PageController@contacts');
//Route::get('/contacts/{id}', 'PageController@contact');
Route::get('contacts/{id}', 'PageController@contact')->name('contacts');

