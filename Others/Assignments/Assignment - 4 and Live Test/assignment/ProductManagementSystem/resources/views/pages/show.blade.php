@extends('layout.app') <!-- Extends your main layout -->

@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div>
            <div>
                <h1 class="mb-5">Product Details</h1>
                <h2 class="mb-4">Product Name : {{ $product->name }}</h2>
                <h5 class="mb-4 text-muted">Product ID : {{ $product->product_id }}</h5>
                <p class="mb-4"><strong>Description : </strong> {{ $product->description }}</p>
                <p class="mb-4"><strong>Price : </strong> ${{ $product->price }}</p>
                <p class="mb-4"><strong>Stock : </strong> {{ $product->stock }}</p>
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid mb-4" width="300">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary m-1">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                    </form>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary m-1">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
