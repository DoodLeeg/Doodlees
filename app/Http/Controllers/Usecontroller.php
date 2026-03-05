<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usecontroller extends Controller
{
    public function show($name,$surname)
    {
        return view('NS',['name' => $name, 'surname' => $surname]);
    }

}
