<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function inputt()
    {
        $in1 = '1';
        $in2 = '2';
        $in3 = '3';
        return view('Input.Input', [
            'input1' => $in1, 
            'input2' => $in2,
            'input3' => $in3
            ]);
    }
}
