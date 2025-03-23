<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function viewForm()
    {
        return view( 'form' );
    }

    public function submitForm( Request $request )
    {
        $request->validate( [
            'name'                  => 'required|min:3',
            'email'                 => 'required|email',
            'password'              => 'required|min:4',
            'password_confirmation' => 'required|same:password',
        ] );

        return response( 'form submitted successfully' );
    }
}
