<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' =>
        [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ],
            [

                'id' => 1,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'

            ]
        ]
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
