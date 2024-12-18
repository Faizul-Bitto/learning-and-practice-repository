@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-center">
        <button class="btn btn-success m-4">
            <a class="nav-link text-white" href="{{ route('products.create') }}">Create Product</a>
        </button>
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product_ID</th>
                    <th>
                        <a class="text-decoration-none"
                            href="{{ route('products.index', ['sort' => 'name', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">
                            Name
                        </a>
                    </th>
                    <th>Description</th>
                    <th>
                        <a class="text-decoration-none"
                            href="{{ route('products.index', ['sort' => 'price', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">
                            Price
                        </a>
                    </th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="50">
                        </td>
                        <td class="d-flex justify-content-between">
                            <a href="{{ route('products.show', $product->id) }}"class="btn btn-primary m-1">Show</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary m-1">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mb-3 d-flex justify-content-center">
        {{ $products->appends(['search' => $search, 'sort' => $sortField, 'direction' => $sortDirection])->links() }}
    </div>
@endsection
