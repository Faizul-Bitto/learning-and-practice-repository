<?php

// use Illuminate\Http\Request;
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

// All Listings :

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all() // Listing is the class here, which will call all the listings from the class Listing, in Listing.php
    ]);
});



// Single Listing :

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function () {
//     return response('<h1>Hello World<h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {

//     //dd($id);
//     // "dump and die." This will stop everything and show whatever I have passed in with line number.
//     // It's used to quickly inspect and display the contents of variables, arrays, objects, or any other data you want to examine

//     //ddd($id);
//     //"dump, die, debug", for debugging. Whole information will be shown.

//     return response('Post ' . $id);
// })->where('id', '[0-9]+');
// //where()-> to add a constraint -> In Laravel, constraints are rules applied to route parameters to ensure they meet specific conditions
// //If we don't add the where() method and declare that this $id will only get the numerical values
// //it will take even any string, even letters
// //So defining -> 'id','[0-9]+'
// //any letters or strings will return 404 not found after this


// Route::get('/search', function (Request $request) {
//     //dd($request->name . '' . $request->city);
//     return ($request->name . ' ' . $request->city);
// });
