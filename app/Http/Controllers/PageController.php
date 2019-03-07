<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Product;
require 'catalogue.php';

class PageController extends Controller
{
    public function index()
    {
        return view('/welcome');
    }
    public function contact($id)
    {
        global $board;
        return view("contacts/contact", [
            'contacts' => $board,
            'id' => $id
        ]);
    }
    public function contacts()
    {
        global $board;
        return view('contacts.ListContact', [
            'contacts' => $board
        ]);
    }
    public function admin()
    {
        $Products = Product::all()->toArray();
        return view('admin.welcome', compact('Products'));
    }
}

