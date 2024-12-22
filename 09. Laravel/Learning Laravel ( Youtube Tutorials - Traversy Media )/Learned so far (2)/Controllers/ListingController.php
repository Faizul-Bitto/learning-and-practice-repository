<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    //show all
    public function index()
    {
        return view('listings.index', ['listings' => Listing::all()]);

    }

    //show individual
    public function show(Listing $listing){

        return view('listing.show',['list' => $listing]);

    }
}
