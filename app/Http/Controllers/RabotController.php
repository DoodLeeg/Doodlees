<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RabotController extends Controller
{
    public function Rabot()
    {
    {
        $name = 'Anton';
        $salary = '250000';
        $age = '33';
        return view('Rabot.rb', [
            'names' => $name, 
            'salary' => $salary,
            'ages' => $age
            ]);
    }
    }
}
