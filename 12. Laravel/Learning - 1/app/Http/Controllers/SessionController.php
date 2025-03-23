<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller {

    // to put a data in session
    public function sessionPut( Request $request ) {
        $email = $request->email;
        $request->session()->put( 'userEmail', $email );

        return true;
    }

    // to pull session data
    public function sessionPull( Request $request ) {
        // with pull method, session data can be retrieved only one time, then that will be flushed
        $sessionPull = $request->session()->pull( 'userEmail', 'defualt' );

        return response( $sessionPull );
    }

    // to get session data
    public function sessionGet( Request $request ) {
        // with get method, session data can be retrieved many times, won't be flushed
        $sessionGet = $request->session()->get( 'userEmail', 'defualt' );

        return response( $sessionGet );
    }

    // to forget a specific session data
    public function sessionForget( Request $request ) {
        $request->session()->forget( 'userEmail' );

        return true;
    }

    // to flush all session data
    public function sessionFlush( Request $request ) {
        $request->session()->flush();

        return true;
    }
}
