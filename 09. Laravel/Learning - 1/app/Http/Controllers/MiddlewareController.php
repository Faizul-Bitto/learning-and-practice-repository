<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller {
    public function demo40() {
        return "hello1";
    }

    public function demo41() {
        return "hello2";
    }

    public function demo42() {
        return "hello3";
    }

    public function demo43() {
        return "hello4";
    }

    public function demo44() {
        return "hello5";
    }

    public function demo45( Request $request ) {
        return $request->header();
    }

    public function demo46() {
        return "hello";
    }
}
