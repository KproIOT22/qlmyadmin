@extends('products.layout')
@section('content')
<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">Show Product
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
        </div>
    </h5>    
        <div class="card-header d-flex justify-content-between align-items-center">Featured</div>
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {{ $product->detail }}
                </div>
            </div>
        </div>
        @endsection