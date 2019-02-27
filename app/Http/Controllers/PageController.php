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

    public function contact($id)
    {
        if ($id == "eric") {
            return view('contacts/contact-eric');
        }
      elseif ($id == "christophe") {
            return view('contact-christophe');
      }
        elseif ($id == "melanie") {
            return view('contact-melanie');
        }
      elseif ($id == "cedric") {
            return view('contact-cedrix');
      }
      else return view('/welcome');
    }
}

