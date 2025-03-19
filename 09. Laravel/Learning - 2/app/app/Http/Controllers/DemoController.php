<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function setSession( Request $request )
    {
        session()->put( 'name', 'john doe' );
        $request->session()->put( 'email', 'johndoe@gmail.com' );
        session( ['phone' => '0123456789'] );

        return response( 'session set' );
    }

    public function getSession( Request $request )
    {
        $name  = session()->get( 'name' );
        $email = $request->session()->get( 'email' );
        $phone = session( 'phone' );
        $age   = session( 'age', 25 );

        return response( compact( 'name', 'email', 'phone', 'age' ) );
    }

    public function readAgain( Request $request )
    {
        $name  = session()->get( 'name' );
        $email = $request->session()->get( 'email' );
        $phone = session( 'phone' );
        $age   = session( 'age' );

        return response( compact( 'name', 'email', 'phone', 'age' ) );
    }

    public function readInView( Request $request )
    {
        $name  = session()->get( 'name' );
        $email = $request->session()->get( 'email' );
        $phone = session( 'phone' );
        $age   = session( 'age', 25 );

        return view( 'about', compact( 'name', 'email', 'phone', 'age' ) );
    }

    public function updateSession( Request $request )
    {
        session()->put( 'name', 'jane doe' );
        $request->session()->put( 'email', 'janedoe@gmail.com' );
        session( [
            'phone' => '0123456788',
            'age'   => 30,
        ] );

        return response( 'session updated' );
    }

    public function destroySession( Request $request )
    {
        session()->forget( 'name' );
        $request->session()->forget( 'email' );
        session()->forget( [
            'phone',
            'age',
        ] );

        return response( 'session destroyed' );
    }

    // for this, only one time use available, after hitting the route, for first time, the flash message will be shown, for next time, that will be gone
    public function setSessionFLashMessage( Request $request )
    {
        session()->flash( 'message', 'a flash message' );
        $request->session()->flash( 'error', 'an error flash message' );
        session( ['phone' => '0123456789'] );

        return response( 'flash message set' );
    }

    public function getSessionFlashMessage( Request $request )
    {
        $message = session()->get( 'message' );
        $error   = $request->session()->get( 'error' );

        return response( compact( 'message', 'error' ) );
    }

    public function flash()
    {
        return view( 'flash' );
    }
}
