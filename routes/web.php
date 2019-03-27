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

    Route::get('/orders', 'BasketController@admin');

//* Routes Category !!! Fini: Ne surtout pas effacer !!! *//
    Route::get('/category', 'CategoryController@index');
    // Route::get('/category/edit', 'CategoryController@edit');
    // Route::post('/category', 'CategoryController@index');
    Route::post('/', 'CategoryController@store');
    Route::resource('/category', 'CategoryController');
//********************* Routes Promo *********************//
    Route::get('/promo', 'promoController@index' );
    Route::post('/promo', 'promoController@store');
    Route::resource('/promo', 'promoController');

});


// ********************   Utilisateur   ********************** //

// Acceuil

Route::get('/', 'PageController@index');

// Produits

Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');

// Panier

Route::get('orders/basket', 'BasketController@index');
Route::post('/', 'BasketController@addProduct');
Route::post('/destroy', 'BasketController@destroy');
Route::post('/validate', 'BasketController@store');

/* Contacts !!! a finir !!! */
Route::get('/contacts', 'ContactController@contact');
//Route::get('/contacts/{id}', 'ContactController@contact');
Route::get('contact/{id}', 'ContactController@perso');

//pages d'erreurs

Route::get('/404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);

Route::get('/405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);

