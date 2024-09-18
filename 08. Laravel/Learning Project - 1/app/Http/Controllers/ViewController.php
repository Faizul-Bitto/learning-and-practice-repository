<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{

    public function demo33()
    {
        // create home.blade.php in views folder
        return view( 'component.home' );
    }
}
