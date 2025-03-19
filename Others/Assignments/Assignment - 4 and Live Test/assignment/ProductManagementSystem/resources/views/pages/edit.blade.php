@extends('layout.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="container mt-5 d-flex justify-content-center">
        <div>
            <h1 class="mb-5">Edit Product</h1>
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="product_id" class="form-label"><b>Product_ID</b></label>
                    <input type="text" class="form-control" id="product_id" name="product_id"
                        value="{{ old('product_id', $product->product_id) }}">
                    @error('product_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name</b></label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $product->name) }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label"><b>Description</b></label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ old('description', $product->description) }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label"><b>Price</b></label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price"
                        value="{{ old('price', $product->price) }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label"><b>Stock</b></label>
                    <input type="number" class="form-control" id="stock" name="stock"
                        value="{{ old('stock', $product->stock) }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label"><b>Image</b></label>
                    @if ($product->image)
                        <div class="mb-2">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="100">
                        </div>
                    @endif
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary text-center m-5">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
