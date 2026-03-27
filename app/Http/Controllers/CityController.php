<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function city()
    {
        $citys = 'Омск';
        return view('City.City' , compact('city'));
    }
}
