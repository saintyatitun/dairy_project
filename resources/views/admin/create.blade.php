<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')
@section('content')
<div class="container mt-3">
<h2 class="my-3 text-center">Product Management</h2>
    <div class="row">
        
            <div class="col-md-2">
                    <div >
                        <div class="mb-3"><a href="{{ route('admin.products') }}" class="btn btn-primary">All Products</a></div>
                        <div><a href="{{ route('admin.create') }}" class="btn btn-success">Add New Product</a></div>
                    </div>
                    {{-- You can place other content related to product management here --}}
            </div>

            <div class="col-md-10 container mt-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Admin Dashboard</div>

                            <div class="card-body">
                                <h4>Manage Products</h4>

                                <!-- Product Insert Form -->
                                <form method="POST" action="{{ route('products.store') }}">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter product" name ="name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                                        <input type="number" id="price" name="price" step="0.01" min="0" placeholder="Enter price" name ="price" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                                        <input type="file" id="image" name="image">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">discription</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="description" required></textarea>
                                    </div>

                                    
                                    <select class="form-select" name="category" aria-label="Default select example" required>
                                        <option >Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                    <button class="btn btn-primary my-2 align-items-center" type="submit">Add</button>
                                </form>

                                <hr>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

   