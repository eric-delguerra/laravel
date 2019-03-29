<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function addProduct(Request $request)
    {
        $order = $this->validate(request(), [
            'qte' => 'required|integer|min:1'
        ]);
        $id = $request->input('id');
        $qte = $request->input('qte');
        $data = $request->session()->all();

        // verif session exist
        if (array_key_exists('panier', $data)) {

            // Verif double depense
            if (in_array($id, $data['panier'])) {
                return view('welcome');
            } else {
                // Push le panier
                $request->session()->push('panier', ['id' => $id, 'qte' => $qte]);

                return view('/welcome');
            }
        }
        // nouveau tableau
        $data['panier'] = [];
        $request->session()->push('panier', ['id' => $id, 'qte' => $qte]);
        return view('welcome');
    }

    public function index()
    {
        if (session('panier')) {
            $i = 0;
            $total = 0;
            foreach (session('panier') as $key => $id) {
                // compare & identifie produit
                $data[] = Product::find($id['id'])->toArray();
                $qte[] = $id['qte'];
                $total = $total + ($data[$i]['price']*$id['qte'])/100;
                $i++;
            }
            
            return view('orders.basket', ['data' => $data, 'qtes' => $qte, 'total' => $total]);
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
        $order->users_id = Auth::user()->id;

        //dd(User::id);

        //$users_id = Auth::user()->id;

        //dd($users_id);
        //dd($order);

        $order->save();


        $items = \session('panier');
        foreach ($items as $key => $table){
            $data['id_product'] = $table['id'];
            $qte['quantity'] = $table['qte'];
            $order->product()->attach($data, $qte);
            $stock = Product::find($data['id_product']);
            $stock->stock = $stock->stock - $qte['quantity'];
            $stock->save();
        }
        session()->forget('panier');
        return view('welcome');
    }
    public function admin(){
        $orders = Orders::all();
        return view('admin/basket', ['orders' => $orders]);
    }
}
