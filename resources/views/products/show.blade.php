@extends('shared.LayoutPage')

@section('title', 'Home Page')

@section('content')
<div class="container">
        <h1 class="text-center my-5">Product Details</h1>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Product Name</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Price</th>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Stock</th>
                        <td>{{ $product->stock }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Description</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Inserted at</th>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Updated at</th>
                        <td>{{ $product->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection