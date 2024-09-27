<?php

namespace App\Http\Controllers;

class DemoController extends Controller {
    public function demo1() {
        return response( 'Hello World!' );
    }

    // string
    public function demo2() {
        return response( 'This is a string!' );
    }
    // int
    public function demo3() {
        return response( 1 );
    }
    // null
    public function demo4() {
        return response( null );
    }
    // boolean
    public function demo5() {
        return response( true );
    }
    // array
    public function demo6() {
        return response( ['a', 'b', 'c'] );
    }
    // associative array or assoc
    public function demo7() {
        return response( [
            'name'    => 'Bill Gates',
            'company' => 'Microsoft',
        ] );
    }
    // multidimensional associative array
    public function demo8() {
        return response( [
            ['name1' => 'Bill Gates'],
            ['name2' => 'Microsoft'],
            ['name3' => 'Steve Jobs'],
        ] );
    }
    // binary large object (BLOB) -> files -> images, videos, etc; first save the file in public folder then do the operation
    public function demo9() {
        return response()->file( 'image.png' );
    }
    // download response -> no file preview, direct download after hitting route
    public function demo10() {
        return response()->download( 'image.png' );
    }
    // redirect to another route
    public function demo11() {
        return redirect( 'demo2/' );
    }
}
