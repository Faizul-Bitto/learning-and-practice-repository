<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller {
    public function demo47( Request $request ) {
        $name = $request->name;

        return response( $name );
    }
}
