<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contacter extends Controller
{
    public function contact($id)
    {
        global $board;
        return view("contacts/contact", [
            'contacts' => $board,
            'id' => $id
        ]);
    }
}
