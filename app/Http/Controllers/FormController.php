<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
