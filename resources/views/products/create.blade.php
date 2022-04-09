@extends('products.layout')

@section('content')

@if ($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">Add Product
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
        </div>
    </h5>

    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <div class="form-group">
                    <label class="form-label" for="basic-default-fullname">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label class="form-label" for="basic-default-fullname">Details</Details></label>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection