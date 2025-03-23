<?php

use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/the name of that page', function(parameters){
//     return view/response('name of that blade file which would be shown in the webpage'),
//     [
//         codes to be executed;
//     ]
// })

// All Listings

Route::get('/', function () {
    return view(
        'listings',
        [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]
    );
});

// Single Listing

Route::get('/listings/{id}', function ($id) {
    return view(
        'listing',
        [
            'list' => Listing::find($id)
        ]
    );
});

// //response can take a content = '', a status = 200 and we can also add headers.
// Route::get('/hello', function () {
//     return response('<h1>Hello World<h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' . $id);
// })->where('id', '[0-9]+'); // where instance -> Basically a condition which should be fulfilled



//                                            Debugging helper methods :

//                              'dd'
// Route::get('/posts/{id}', function ($id) {
//     dd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+'); // where instance -> Basically a condition which should be fulfilled

// //                              'ddd'
// Route::get('/posts/{id}', function ($id) {
//     ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+'); // where instance -> Basically a condition which should be fulfilled


// Route::get('/search', function (Request $request) {
//     return ($request->name . '' . $request->city);
// });

// Route::get('/search', function (Request $request) {
//     return ($request->name . ' ' . $request->city);
// });
