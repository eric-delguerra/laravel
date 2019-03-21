<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function addProduct(Request $request)
    {
        $id = $request->input('id');
        $qte = $request->input('qte');
        $data = $request->session()->all();

        if (array_key_exists('panier', $data)){

            if(in_array($id, $data['panier'])) {
                return view('welcome');
            } else {
                $request->session()->push('panier', ['id' => $id, 'qte' => $qte]);

                return view('/welcome');
           }
        }
        $data['panier']=[];
        $request->session()->push('panier', ['id' => $id, 'qte' => $qte]);
        return view('welcome');
    }
    public function index()
    {
        if (session('panier')){
            foreach (session('panier') as $key => $id){
//                dd($id);
                $data[] = Product::find($id['id'])->toArray();
                $qte[] = $id['qte'];
                //                dd($id);
            }
//dd($qte);
            return view('orders.basket', ['data' => $data], ['qtes' => $qte]);

        }
        return view('orders.basket');
    }
}
