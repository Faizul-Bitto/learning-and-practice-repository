<?php

namespace App\Http\Controllers;

class WorkingWithCookiesController extends Controller
{
    public function demo31()
    {
        // generating and setting cookie
        $cookieName      = 'Cookie_1';
        $cookieValue     = 'Value_1';
        $cookieTimeInMin = 120;
        $path            = '/'; // will work on entire application
        $domain          = $_SERVER['SERVER_NAME']; // dynamically getting the server name
        $secure          = false;
        $httpOnly        = true;

        return response( "hello" )->cookie( $cookieName, $cookieValue, $cookieTimeInMin, $path, $domain, $secure, $httpOnly );
    }
}
