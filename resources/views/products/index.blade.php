@extends('products.layout')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <p>{{ $message }}</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card">
    <h5 class="card-header">Table Basic
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{ route('products.create') }}"><span
                    class="tf-icons bx bx-plus"></span>&nbsp;
                Create New Product</a>
        </div>
    </h5>
    <div class="table-responsive text-nowrap">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($products as $product)
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ ++$i }}</strong></td>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $product->name }}</strong></td>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $product->detail }}</strong>
                </td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                <a class="dropdown-item" href="{{ route('products.show',$product->id) }}"><button
                                        type="button" class="btn btn-outline-primary"><i
                                            class="bx bx-edit-alt me-1"></i>Show</button></a>

                                <a class="dropdown-item" href="{{ route('products.edit',$product->id) }}"><button
                                        type="button" class="btn btn-outline-warning"><i
                                            class="bx bx-edit-alt me-1"></i>Edit</button></a>
                                @csrf
                                @method('DELETE')

                                <a class="dropdown-item"><button type="submit" class="btn btn-outline-danger"><i
                                            class="bx bx-trash me-1"></i>Delete</button></a>
                            </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {!! $products->links('partials.ui-pagination') !!}

    @endsection