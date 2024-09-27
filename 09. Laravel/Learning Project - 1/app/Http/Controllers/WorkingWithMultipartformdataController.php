<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkingWithMultipartformdataController extends Controller
{
    public function demo20( Request $request )
    {
        // picking a image file
        $photo = $request->file( 'image' );
        // size of the file
        $fileSize = $photo->getSize();
        // getting original name of the file
        $fileOriginalName = $photo->getClientOriginalName();
        // getting temporary name of the file
        $fileTemporaryName = $photo->getFilename();
        // getting file extension
        $fileExtensionWithExtension                  = $photo->extension();
        $fileExtensionWithGetClientOriginalExtension = $photo->getClientOriginalExtension();

        return response( [
            'fileSize'                                    => $fileSize,
            'fileOriginalName'                            => $fileOriginalName,
            'fileTemporaryName'                           => $fileTemporaryName,
            'fileExtensionWithExtension'                  => $fileExtensionWithExtension,
            'fileExtensionWithGetClientOriginalExtension' => $fileExtensionWithGetClientOriginalExtension,
        ] );
    }

    public function demo21( Request $request )
    {
        // picking a image file
        $image = $request->file( 'image' );

// to store the file in storage directory, with storeAs() method
        // storeAs(directory: 'uploads', save with the name: $image->getClientOriginalName() );
        $image->storeAs( 'uploads', $image->getClientOriginalName() );

// to move the file in public directory, with move() method
        // move(directory: public_path(path: 'uploads' ), save with the name: $image->getClientOriginalName() );
        $image->move( public_path( 'uploads' ), $image->getClientOriginalName() );

        // keep that in mind, to save the file in both directory at once, first execute for storage and then for public

        return true;
    }

    public function demo22( Request $request )
    {
        // picking a image file
        $ipAddress = $request->ip();

        return response( $ipAddress );
    }

    public function demo23( Request $request )
    {
        /*
        working with Content Negotiations
        most of the time we use Accept header to pick the data format
        there are two types: text/html and application/json
        mainly we work with application/json
         */
        $acceptableContentTypes = $request->getAcceptableContentTypes();

// will return an array with all the acceptable content types
        // for this case it will be [*/*], we can check on postman header

        return response( $acceptableContentTypes );
    }

    public function demo24( Request $request )
    {

//content type check
        if ( $request->accepts( 'application/json' ) )
        {
            return 1; // true
        }
        else
        {
            return 0; // false
        }

    }

    // working with cookie
    public function demo25( Request $request )
    {
        // getting all cookie value from request
        $cookieAll = $request->cookie();
        // getting specific cookie value from request
        $cookieSpecific = $request->cookie( 'Cookie_1' );

        return response( ['cookieAll' => $cookieAll,
            'cookieSpecific'             => $cookieSpecific] );
    }

    // working with json response
    public function demo26( Request $request )
    {
        $array = [
            "firstName" => "John",
            "lastName"  => "Doe",
        ];

        return response()->json( $array, 201 ); // by default the status code will be set to 200 which means 'ok', if we don't even pass any status code, but if we pass any, then that will be set as the status code
    }

}
