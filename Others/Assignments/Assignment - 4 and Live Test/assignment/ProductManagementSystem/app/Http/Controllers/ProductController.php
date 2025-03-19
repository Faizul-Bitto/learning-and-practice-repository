<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index( Request $request )
    {
        $search        = $request->input( 'search' );
        $sortField     = $request->input( 'sort', 'id' );
        $sortDirection = $request->input( 'direction', 'asc' );

        $products = Product::where( 'product_id', 'LIKE', "%{$search}%" )
            ->orWhere( 'description', 'LIKE', "%{$search}%" )
            ->orderBy( $sortField, $sortDirection )
            ->paginate( 5 );

        return view( 'pages.index', compact( 'products', 'search', 'sortField', 'sortDirection' ) );
    }

    public function create()
    {
        return view( 'pages.create' );
    }

    public function store( Request $request )
    {
        $request->validate( [
            'product_id'  => 'required|unique:products',
            'name'        => 'required',
            'description' => 'nullable|max:255',
            'price'       => 'required|numeric',
            'stock'       => 'nullable|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ] );

        $imagePath = '';
        $photo     = $request->file( 'image' );

        if ( $photo )
        {
            $photo->move( public_path( 'uploads' ), $photo->getClientOriginalName() );
            $imagePath = 'uploads/' . $photo->getClientOriginalName();
        }

        Product::create( [
            'product_id'  => $request->product_id,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image'       => $imagePath,
        ] );

        return redirect()->back()->with( 'success', 'Product created successfully' );
    }

    public function show( Request $request )
    {
        $id = $request->id;

        $product = Product::findOrFail( $id );

        return view( 'pages.show', compact( 'product' ) );
    }

    public function edit( Request $request )
    {
        $id = $request->id;

        $product = Product::findOrFail( $id );

        return view( 'pages.edit', compact( 'product' ) );
    }

    public function update( Request $request )
    {
        $request->validate( [
            'product_id'  => 'required|unique:products,product_id,' . $request->id,
            'name'        => 'required',
            'description' => 'nullable|max:255',
            'price'       => 'required|numeric',
            'stock'       => 'nullable|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ] );

        $id = $request->id;

        $product   = Product::findOrFail( $id );
        $photo     = $request->file( 'image' );
        $imagePath = $product->image;

        if ( $photo )
        {

            if ( $product->image && file_exists( public_path( $product->image ) ) )
            {
                unlink( public_path( $product->image ) );
            }

            $photo->move( public_path( 'uploads' ), $photo->getClientOriginalName() );
            $imagePath = 'uploads/' . $photo->getClientOriginalName();
        }

        $product->update( [
            'product_id'  => $request->product_id,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image'       => $imagePath,
        ] );

        return redirect()->back()->with( 'success', 'Product updated successfully' );
    }

    public function destroy( Request $request )
    {
        $id = $request->id;

        Product::where( 'id', '=', $id )
            ->delete();

        return redirect()->route( 'products.index' )->with( 'success', 'Product deleted successfully' );
    }

}
