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

Route::get('/products', 'PageController@products');
Route::get('product/{id}', 'PageController@product');
//Route::resource('product', 'PageController');

Route::get('/products/name', 'PageController@prodName');
Route::get('/products/price', 'PageController@prodPice');

Route::get('/products/edit', 'PageController@productsEdit');
Route::get('/product/edit/{id}', 'PageController@productEdit');
Route::post('/product/edit/{id}', 'PageController@productUpdate');
Route::post('/addprod', 'PageController@productAdd');
Route::get('/addprod', function(){
    return view('admin/addProduct');
});
Route::get('/product/erase/{id}', 'PageController@productErase');

// Panier

Route::get('/basket', function () {
    return view('orders/basket');
});

// Contacts

Route::get('/contacts', 'PageController@contacts');
Route::get('/contacts/{id}', 'PageController@contact');

//Route::get('products/pinard', function(){
//    return view('products/LayoutProd');
//});

Route::get('/connexion', function (){
    return view('connect/connection');
});

Route::get('/inscription', function (){
    return view('connect/inscription');
});
