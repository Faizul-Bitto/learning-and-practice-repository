<?php

namespace App\Http\Controllers;

class BladeController extends Controller
{
    public function demo51()
    {
        // multidimensional associative array
        $billGates = [
            ["firstName" => "Bill", "lastName" => "Gates", "age" => 68],
            ["firstName" => "Mark", "lastName" => "Zuckerberg", "age" => 62],
            ["firstName" => "Jeff", "lastName" => "Bezos", "age" => 57],
        ];

        return view( 'demo51', compact( 'billGates' ) );
        // can also write without compact() function
        // return view( 'demo51', ['billGates' => $billGates] );
    }

}
