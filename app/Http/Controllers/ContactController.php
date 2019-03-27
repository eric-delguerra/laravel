<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;

class ContactController extends Controller
{
    public function contact()
    {

//            $products   = Product::all()->sortBy('price');
        $contact = DB::select('SELECT * FROM contact');
        return view('contacts.contacts', ['lastName' => $contact]);

    }


    public function perso($id)

    {
        $contact = Contact::where('firstName', $id)->get()->first();
        //dd($contact);
//        $contact = DB::select("SELECT * FROM contact WHERE firstName = ". $id);
        return view("contacts/contact", ['contact' => $contact]);

    }


}

