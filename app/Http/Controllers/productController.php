<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

//use App\Http\Controllers\Controller;

class productController extends Controller
{

    public function index()
    {
        //$tab = [
        //    [
        //        'name' => 'saucisson',
        //        'price' => 12,
        //        'description' => 'Il est bon'
        //    ],
        //    [
        //        'name' => 'Fromage',
        //        'price' => 9,
        //        'description' => 'C\'est pas mauvais'
        //    ],
        //    [
        //        'name' => 'pain',
        //        'price' => 1,
        //        'description' => 'Le corps du Christ'
        //    ],
        //    [
        //        'name' => 'Pinard',
        //        'price' => 56,
        //        'description' => 'Le sang du Christ'
        //    ]
        //];

        $tab = Post::get();

        //$tab = DB::select('select id, title, price, content from articles ');

        return view('products/products')
            ->withproducts($tab)
            ;
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
        //dump($request);
        return view('admin.confirm-save-product');
    }


    public function show($id)
    {
        return view('products/product', [
            'x'=> $id
        ]);
    }


    public function edit()
    {
        //
    }


    public function update(Request $_post, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function product($id)
    {
        $produit = DB::select('select title, price, content, image, vignette from articles where id =?',[$id]);
        //dd($produit);
        return view('products/product')
            ->withproducts($produit[0]);
    }

    public function about()
    {
        $title = "A propos <p>de nous !!!</p>";
        //return view('pages/about');
        return view('pages/about', ['title' => $title]);
    }
}
