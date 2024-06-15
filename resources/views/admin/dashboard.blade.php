
@component('header')
@endcomponent
@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Product Management</h2>
                <div class="mb-3">
                    <a href="{{ route('admin.products') }}" class="btn btn-dark">All Products</a>
                    <a href="{{ route('admin.create') }}" class="btn btn-danger">Add New Product</a>
                </div>

                {{-- You can place other content related to product management here --}}
            </div>
        </div>
    </div>
@endsection
