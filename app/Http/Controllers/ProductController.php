<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use App\Promo;

class productController extends Controller
{

    public function index()
    {
        if (isset($_GET['price'])) {
            $products = Product::all()->sortBy('price');
            $reduc = $this->reduc($products);
            return view('products.products', ['products' => $products], ['reduc' =>$reduc]);
        }
        if (isset($_GET['stock'])) {
            $products = Product::all()->sortBy('stock');
            return view('products.products', ['products' => $products]);
        } else {
            $products = Product::all()->sortBy('name');
            return view('products.products', ['products' => $products]);
        }
    }

    public function show($id)
    {
        $results = Product::find($id);
        return view('products/product', ['product' => $results]);
    }

    private function reduc($products){
        $reducs = array();
        $promos = Promo::all();
        foreach ($products as $key=>$product){
            foreach ($promos as $key=>$promo) {
                if ($product->promo['id'] == $promo->id) {
                    switch ($product->promo->type){
                        case 1 :
                            $reduc = $product->price - $product->promo->value;
                            if ($reduc<0){
                                $reduc = 0;
                            }
                            $reducs[$product->id] =  $reduc;
                        break;
                        case 2:
                            $reduc = $product->price - (($product->price * $product->promo->value) /100);
                            if ($reduc<0){
                                $reduc = 0;
                            }
                            $reducs[$product->id] =  $reduc;
                        break;
                        default:
                            $reducs[$product->id] =  null;
                        break;
                    }
                }
            }
        }
        return $reducs;
     }
}
