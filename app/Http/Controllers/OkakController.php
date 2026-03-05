<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OkakController extends Controller
{
    public function show($name)
    {
        return 'Hello, my name - '.$name;
    }
}
