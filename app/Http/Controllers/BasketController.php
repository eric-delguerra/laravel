<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Product;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class BasketController extends Controller
{
    public function addProduct(Request $request)
    {
        $id = $request->input('id');
        $qte = $request->input('qte');
        $data = $request->session()->all();

        if (array_key_exists('panier', $data)) {

            if (in_array($id, $data['panier'])) {
                return view('welcome');
            } else {
                $request->session()->push('panier', ['id' => $id, 'qte' => $qte]);

                return view('/welcome');
            }
        }
        $data['panier'] = [];
        $request->session()->push('panier', ['id' => $id, 'qte' => $qte]);
        return view('welcome');
    }

    public function index()
    {
        if (session('panier')) {
            foreach (session('panier') as $key => $id) {
                $data[] = Product::find($id['id'])->toArray();
                $qte[] = $id['qte'];
            }
            return view('orders.basket', ['data' => $data], ['qtes' => $qte]);
        }
        return view('orders.basket');
    }

    public function destroy(Request $request)
    {
        $item = $request->input('id');
        foreach (session('panier') as $key => $table) {
            if (in_array($item, $table)) {
                $request->session()->forget("panier." . $key);
            }
        }
        return view('welcome');
    }
    public function store(){
        $order = new Orders();
        $order->created_at = new \DateTime();
        $order->save();

        $items = \session('panier');
        foreach ($items as $key => $table){
            $data['id_product'] = $table['id'];
            $qte['quantity'] = $table['qte'];
            $order->product()->attach($data, $qte);
        }
        session()->forget('panier');
        return view('welcome');
    }
}
