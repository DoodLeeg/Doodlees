<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($name, $age, $salary)
    {
        return view('Worker.Worker', ['salary' => $salary, 'name' => $name, 'age' => $age]);
    }

    
}
