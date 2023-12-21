@extends('shared.LayoutPage')
@section('title', 'Edit Product')


@section('content')
<div class="container">
        <h1 class="text-center my-5">Edit Product</h1>

        <form class="px-5" action="{{ route('products.update', $product->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Product name" value="{{$product->name }}" name="name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Price" value="{{$product->price }}" name="price">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Stock" value="{{$product->stock }}" name="stock">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Description" name="description">{{$product->description }}</textarea>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-secondary">Update Product</button>
            </div>
        </form>
    </div>
@endsection