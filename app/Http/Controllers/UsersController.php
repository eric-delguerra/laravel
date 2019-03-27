<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        if (\Auth::check()){
            $currentUser = \Auth::id();
            $infos = User::find($currentUser);
            Return view('users.info', ['infos' => $infos]);
        }
    }
}
