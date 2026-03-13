<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleCotroller extends Controller
{
    public function show()
    {
        return view('Users.Names');
    }
    public function sur()
    {
        return view('Users.Surnames');
    }
    public function age()
    {
        return view('Users.Ages');
    }
      
}
