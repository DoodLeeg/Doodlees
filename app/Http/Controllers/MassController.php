<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MassController extends Controller
{
    public function mass()
    {
        $massiv = [1,2,3,4,5];
        return view('Mass.mass', compact('massiv'));
    }
}
