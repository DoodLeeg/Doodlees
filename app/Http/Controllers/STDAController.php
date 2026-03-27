<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class STDAController extends Controller
{
     public function std()
    {
        $year = '2006';
        $mount = '04';
        $day = '11';
        return view('SatD.sat' , compact('year','mount', 'day'));
    }
}
