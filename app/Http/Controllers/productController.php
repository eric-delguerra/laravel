<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Categories;

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

    public function create()
    {
        $idCategorie = Categories::all()->toArray();
        return view('admin.add-product', ['idCategorie' => $idCategorie]);
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
            'category_id' => 'required|numeric',
        ]);
        Product::create($product);
        return redirect('admin')
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
        $product = Product::find($id);
        return view('admin.edit', compact('product', 'id'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->weigth = $request->get('weigth');
        $product->description = $request->get('description');
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
