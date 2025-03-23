<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{

    public function demo34( Request $request )
    {

        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum  = $num1 + $num2;

        Log::info( $sum );
        Log::error( $sum );
        Log::warning( $sum );

        return response( $sum );
    }
}
