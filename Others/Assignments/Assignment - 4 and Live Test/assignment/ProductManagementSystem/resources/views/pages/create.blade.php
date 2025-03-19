@extends('layout.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="container mt-5 d-flex justify-content-center">
        <div>
            <div>
                <h1 class="mb-5">Create Product</h1>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="product_id" class="form-label"><b>Product_ID</b></label>
                        <input type="text" class="form-control" id="product_id" name="product_id"
                            value="{{ old('product_id') }}">
                        @error('product_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label"><b>Name</b></label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label"><b>Description</b></label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ old('description') }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label"><b>Price</b></label>
                        <input type="number" class="form-control" id="price" name="price"
                            value="{{ old('price') }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label"><b>Stock</b></label>
                        <input type="number" class="form-control" id="stock" name="stock"
                            value="{{ old('stock') }}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label"><b>Image</b></label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary text-center m-5">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
