<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function dataGet()
    {
        /* previously we get the data by query builder like this:
        return DB::table( 'users' )->get();
        now for ORM, we will replace 'DB::table( 'users' )' with: User::get();
        DB::table( 'users' ) -> this extra line is not necessary now
         */

        return User::with( 'category', 'customer', 'product' )->get();
    }

    public function dataGetCategories()
    {
        return Category::with( 'user' )->get();
    }

    public function dataGetProducts()
    {
        return Product::with( 'user', 'category' )->get();
    }

    public function insertDataAllAtOnce( Request $request )
    {
        return User::create( $request->input() );
    }

    public function insertMultipleDataAllAtOnce( Request $request )
    {
        DB::beginTransaction(); // database session creation

        try {
            $data = $request->input();

            foreach ( $data as $value )
            {
                User::create( [
                    'firstName' => $value['firstName'],
                    'lastName'  => $value['lastName'],
                    'email'     => $value['email'],
                    'mobile'    => $value['mobile'],
                    'password'  => $value['password'],
                ] );
            }

            DB::commit(); // session will commit/confirm all actions

            return "ok";
        }
        catch ( Exception $exception )
        {
            DB::rollBack(); // session will rollback all actions if any error occurs

            return "not ok";
        }

    }

    public function dataUpdate( Request $request )
    {
        $id = $request->id;

        $data = $request->input();

        return User::where( 'id', '=', $id )
            ->update( $data );
    }

    public function dataDelete( Request $request )
    {
        $id = $request->id;

        return User::where( 'id', '=', $id )
            ->delete();
    }

}
