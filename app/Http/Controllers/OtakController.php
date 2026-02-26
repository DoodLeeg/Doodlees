<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtakController extends Controller
{
    public function show($Surname, $Name)
    {
        return 'My surname - '.$Surname.' and my name - '.$Name;
    }
}
