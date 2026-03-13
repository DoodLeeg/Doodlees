<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtakController extends Controller
{
    public function show($Fruit, $Milk)
    {
        return view('favorite.NS-1',['Fruit' => $Fruit, 'Milk' => $Milk]);
    }
}
