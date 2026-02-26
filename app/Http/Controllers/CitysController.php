<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitysController extends Controller
{
    public function NameUser($User)
    {
        return 'My city - '.$User;
    }
}
