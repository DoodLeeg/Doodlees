<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function css($red)
    {
        return view('Colors.Colors', ['color' => $red]);
    }
}
