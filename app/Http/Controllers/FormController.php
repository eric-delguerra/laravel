<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function create()
    {
        return view ('auth/Form');

    }


    public function store (request $request)
    {
        $data = [ 'user'=>
                  ['firstname' => $request->input('firstname'),
                    'lastname'=>$request->input('lastname'),
                    'content'=>$request->input('content'),
                  ],
                ];
                return view ('auth.result', $data);
    }

    public function index()
    {
        $patate = DB::select('select * from products where price <10');
//        dd($patate);
        return view('auth.result',['product'=>$patate]);
    }

}
