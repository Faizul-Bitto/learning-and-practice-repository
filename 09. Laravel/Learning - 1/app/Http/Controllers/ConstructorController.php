<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware( 'auth' );
    // }

    public function demo50( Request $request )
    {
        return response( "hello!" );
    }
}
