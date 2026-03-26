<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function text()
    {
        return view('Text-INFO.Text', ['http' => '//faceit' ,'text' => 'faceit.com']);
    }
}
