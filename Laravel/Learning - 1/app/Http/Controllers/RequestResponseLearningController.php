<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestResponseLearningController extends Controller {
    public function demo12( Request $request ) {
        $name = $request->name;
        $age  = $request->age;

        return response( ['name' => $name, 'age' => $age] );
    }

    public function demo13( Request $request ) {
        return response( $request->input() );
    }
    public function demo14( Request $request ) {
        return response( $request->input( "firstName" ) );
        // same:
        // return response( $request->firstName );
    }

    // with header
    public function demo15( Request $request ) {
        return response( $request->header() );
        // for specific header
        // return response( $request->header( "token" ) );
    }

    // query string
    public function demo16( Request $request ) {
        return response( $request->query() );
        // for specific
        // return response( $request->query( "name1" ) );
    }

    // with request
    public function demo17( Request $request ) {
        $id = "invoice title: " . $request->id;
        return response( "<h1>{$id}</h1>" );
    }

    // with parameter
    public function demo18( Request $request, $id ) {
        return response( "<h1>{$id}</h1>" );
    }

    public function demo19( Request $request, $id, $itemId, $titleId ) {
        return response( "<h1>{$id}, {$itemId}, {$titleId}</h1>" );
    }

    // inserting headers
    public function demo32() {
        return response( "Hello" )
            ->header( 'key1', 'value1' )
            ->header( 'key2', 'value2' )
            ->header( 'key3', 'value3' );
    }
}
