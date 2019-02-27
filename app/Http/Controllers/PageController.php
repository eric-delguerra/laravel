<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('/welcome');
    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function store(Request $request)
    {
        return view('/welcome');
    }
}

