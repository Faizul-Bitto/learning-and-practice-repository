<?php

namespace App\Http\Controllers;

class WorkingWithRedirectionController extends Controller {
    public function demo27() {
        return redirect( 'demo28/' );
    }

    public function demo28() {
        return response( 'hello world!' );
    }

    public function demo29() {
        // getting the saved file path
        $filePath = "image.png";

        // to preview the file
        return response()->file( $filePath );
    }

    public function demo30() {
        // getting the saved file path
        $filePath = "image.png";

        // to download the file
        return response()->download( $filePath );
    }
}
