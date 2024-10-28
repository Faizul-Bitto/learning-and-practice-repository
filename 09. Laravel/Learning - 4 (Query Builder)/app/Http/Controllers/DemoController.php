<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class DemoController extends Controller
{
    public function index()
    {
        $result = DB::table( 'products' )->get();

        return $result;
    }

    public function gettingFirstRowOnly()
    {
        // will get only the data of first row of that table
        $result = DB::table( 'products' )->first();

        return $result;
    }

    public function gettingDataBasedOnId()
    {
        // will get only the data of the given id of that table
        $result = DB::table( 'products' )->find( 18 );

        return $result;
    }

    public function gettingDataOfAnySpecificColumn()
    {
        // will get only the data of the given column of that table
        // $result = DB::table( 'products' )->pluck( 'name' );
        $result = DB::table( 'products' )->pluck( 'name', 'id' );

        return $result;
    }

    public function aggregates()
    {
        // count() -> will return the total number of rows of this table
        $count = DB::table( 'products' )->count();

        // max() -> will return the maximum value of the given column
        $max = DB::table( 'products' )->max( 'price' );

        // min() -> will return the minimum value of the given column
        $min = DB::table( 'products' )->min( 'price' );

        // avg() -> will return the average value of the given column
        $avg = DB::table( 'products' )->avg( 'price' );

        // sum() -> will return the sum of the given column
        $sum = DB::table( 'products' )->sum( 'price' );

        return response( [
            'count' => $count,
            'max'   => $max,
            'min'   => $min,
            'avg'   => $avg,
            'sum'   => $sum,
        ] );
    }

    public function selectClause()
    {
        // this will return the data of the given columns
        $result = DB::table( 'products' )->select( 'id', 'name', 'price' )->get();

        return $result;
    }

    public function distinctSelectClause()
    {
        // this will return the unique values of the given column
        $result = DB::table( 'products' )->select( 'unit' )->distinct()->get();

        return $result;
    }

    public function innerJoin()
    {
        $result = DB::table( 'products' )
            ->join( 'categories', 'products.category_id', '=', 'categories.id' )
            ->join( 'users', 'products.user_id', '=', 'users.id' )
            ->get();

        return $result;
    }

    public function leftJoin()
    {
        $result = DB::table( 'products' )
            ->leftJoin( 'categories', 'products.category_id', '=', 'categories.id' )
            ->leftJoin( 'users', 'products.user_id', '=', 'users.id' )
            ->get();

        return $result;
    }

    public function rightJoin()
    {
        $result = DB::table( 'products' )
            ->rightJoin( 'categories', 'products.category_id', '=', 'categories.id' )
            ->rightJoin( 'users', 'products.user_id', '=', 'users.id' )
            ->get();

        return $result;
    }

    public function crossJoin()
    {
        // no need to provide the relationship column
        $result = DB::table( 'products' )
            ->crossJoin( 'categories' )
            ->crossJoin( 'users' )
            ->get();

        return $result;
    }

    public function advancedJoin()
    {
        $result = DB::table( 'products' )
            ->join( 'categories', function ( JoinClause $join )
        {
                $join->on( 'products.category_id', '=', 'categories.id' )
                    ->where( 'products.price', '>', '2000' );
            } )
            ->join( 'users', function ( JoinClause $join )
        {
                $join->on( 'products.user_id', '=', 'users.id' )
                    ->where( 'products.price', '>', '2000' );
            } )
            ->get();

        return $result;
    }

    public function union()
    {
        $query1 = DB::table( 'products' )->where( 'products.price', '>', '200' );
        $query2 = DB::table( 'products' )->where( 'products.category_id', '=', '34' );

        $result = $query1->union( $query2 )->get();

        return $result;
    }

    public function whereClause()
    {
        $result = DB::table( 'products' )
            ->whereMonth( 'products.updated_at', '=', '10' )
            ->get();

        return $result;
    }

    public function orderByClause()
    {
        $result = DB::table( 'products' )
            ->orderBy( 'price', 'desc' )
            ->get();

        return $result;
    }

    public function latest()
    {
        $result = DB::table( 'products' )
            ->latest()
            ->get();

        return $result;
    }

    public function oldest()
    {
        $result = DB::table( 'products' )
            ->oldest()
            ->get();

        return $result;
    }

    public function skipAndTake()
    {
        $result = DB::table( 'products' )
            ->skip( 5 )
            ->take( 5 )
            ->get();

        return $result;
    }

    public function groupByAndHaving()
    {
        $result = DB::table( 'products' )
            ->groupBy( 'price' )
            ->having( 'price', '>', '500' )
            ->get();

        return $result;
    }

    public function insertMethodHardCoded()
    {
        // hard coded values
        $result = DB::table( 'users' )
            ->insert( [
                'firstName' => 'Hasan',
                'lastName'  => 'Mahmud',
            ] );

        return $result;
    }

    public function insertMethodFromRequestBodyAllAtOnce( Request $request )
    {
        // all at once
        // keep that in mind, for at once picking ($request->input()), input keys must be same as table column names in database
        $data = $request->input(); // (only json body)

        $result = DB::table( 'users' )
            ->insert( $data );

        return $result;
    }

    public function insertMethodFromRequestBodyOneByOne( Request $request )
    {
        // values picked from request one by one
        $result = DB::table( 'users' )
            ->insert( [
                'firstName' => $request->input( 'firstName' ),
                'lastName'  => $request->input( 'lastName' ),
                'email'     => $request->input( 'email' ),
                'mobile'    => $request->input( 'mob' ),
                'password'  => $request->input( 'pass' ),
                'otp'       => $request->input( 'otp' ),
            ] );

        return $result;
    }

    public function updateMethodHardCoded()
    {
        // hard coded values
        $result = DB::table( 'users' )
            ->where( 'id', '=', '16' )
            ->update( [
                'firstName' => 'Hasan',
                'lastName'  => 'Mahmud',
            ] );

        return $result;
    }

    public function updateMethodPickIdFromUrlParameter( Request $request )
    {
        // Picking id from url parameter
        $id = $request->id;

        $result = DB::table( 'users' )
            ->where( 'id', '=', $id )
            ->update( [
                'firstName' => 'Abul',
                'lastName'  => 'Hasan',
            ] );

        return $result;
    }

    public function updateMethodFromRequestBodyAllAtOnce( Request $request )
    {
        // all at once (only json body)
        // keep that in mind, for at once picking ($request->input()), input keys must be same as table column names in database
        $data = $request->input();
        $id   = $request->id;

        $result = DB::table( 'users' )
            ->where( 'id', '=', $id )
            ->update( $data );

        return $result;
    }

    // public function updateMethodFromRequestBodyOneByOne( Request $request )
    // {
    //     $id = $request->id;

    //     // values picked from request one by one
    //     $data = [
    //         'firstName' => $request->input( 'firstName' ),
    //     ];

    //     $result = DB::table( 'users' )
    //         ->where( 'id', '=', $id )
    //         ->update( $data );

    //     return $result;
    // }

    public function updateOrInsertMethod( Request $request )
    {
        // Define the attributes to check
        $attributes = [
            'id' => $request->id,
        ];

        // Define the values to update or insert
        $values = $request->input();

        // Perform update or insert
        $result = DB::table( 'products' )
            ->updateOrInsert( $attributes, $values );

        return $result;
    }

    public function incrementMethod( Request $request )
    {
        $result = DB::table( 'products' )
            ->where( 'id', '=', $request->id )
            ->increment( 'price', 200 );

        return $result;
    }

    public function decrementMethod( Request $request )
    {
        $result = DB::table( 'products' )
            ->where( 'id', '=', $request->id )
            ->decrement( 'price', 1 );

        return $result;
    }

    public function deleteMethod( Request $request )
    {
        $result = DB::table( 'users' )
            ->where( 'id', '=', $request->id )
            ->delete();

        return $result;
    }

}
