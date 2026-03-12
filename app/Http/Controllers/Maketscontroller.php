<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maketscontroller extends Controller
{
   public function show($content)
   {
    return view('makeBL', ['content' => $content]);
   } 
}
