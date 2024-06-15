<!-- resources/views/admin/dashboard.blade.php -->

@component('header')

@endcomponent

@extends('layouts.app')
@section('content')
<div style="background-image: url('/img/milk.jpg');background-size: cover; z-index: 2;">
<div class="container mt-3">
<h2 class="my-3 text-center">Product Management</h2>
    <div class="row">
        
            <div class="col-md-2">
                    <div >
                        <div class="mb-3"><a href="{{ route('admin.products') }}" class="btn btn-dark">All Products</a></div>
                        <div><a href="{{ route('admin.create') }}" class="btn btn-danger">Add New Product</a></div>
                    </div>

                    {{-- You can place other content related to product management here --}}
            </div>

            <div class="container col-md-10">
                <h2>All Products</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td style="width: 200px;">{{ $product->description }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}"  style="display: inline;" method="POST">
                                {{ csrf_field() }}
                                
                                    <button type="submit" class="btn btn-success btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
</div>
@endsection

   


   

