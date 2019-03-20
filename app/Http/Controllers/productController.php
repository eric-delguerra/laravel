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
            return view('products.products', ['products' => $products]);
        }
        if (isset($_GET['stock'])) {
            $products = Product::all()->sortBy('stock');
            return view('products.products', ['products' => $products]);
        } else {
            $products = Product::all()->sortBy('name');
            return view('products.products', ['products' => $products]);
        }
    }

    public function admin(){

    }

    public function create()
    {
        $idCategorie = Categories::all()->toArray();
        $idPromo = Promo::all()->toArray();
        return view('admin.add-product')
        ->with(['idCategorie' => $idCategorie])
            ->with(['idPromo'=>$idPromo]);
    }

    public function store(Request $request)
    {
        $product = $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'img' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'weigth' => 'required|numeric',
            'categories_id' => 'required|numeric',
            'promo_id' => 'required|numeric',
        ]);

        Product::create($product);

        return redirect('/admin')
            ->with('flash_message', ' Niquel, c\'est bien ajouté ')
            ->with('flash_type', 'alert-success');
    }


    public function show($id)
    {
        $results = Product::find($id);
        return view('products/product', ['product' => $results]);
    }


    public function edit($id)
    {
        $product = Product::with(['Promo'])->find($id);
       // $promo = Promo::all();
        return view('admin.edit')
            ->with(['product' => $product]);

    }


    public function update(Request $request, $id)
    {
//        dd($request);
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->weigth = $request->get('weigth');
        $product->description = $request->get('description');
        $product->promo_id = $request->get('promo_id');
        $product->save();
        return redirect('admin')
            ->with('flash_message', ' Produit mis à jour ')
            ->with('flash_type', 'alert-warning');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin')
            ->with('flash_message', 'Produit supprimé')
            ->with('flash_type', 'alert-danger');

    }
}
