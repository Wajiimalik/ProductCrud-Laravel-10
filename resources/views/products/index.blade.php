@extends('shared.LayoutPage')

@section('title', 'All Products')

@section('content')

<style>
    .action-icon {
        color: #015f79;
        background-color: transparent;
        border: none;
        text-decoration: none;
    }

    .action-icon:hover {
        color: #009aa2;
    }
</style>


<!-- list -->
<div class="container">
    <h1 class="text-center my-5">All Products</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-sm align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Product name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($products as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->stock }}</td>
                        <td class="">
                            <a href="{{ route('products.edit', $row->id) }}" class="mx-2 action-icon"><i class="fa-solid fa-pen-to-square"></i></a>

                            <button class="mx-2 action-icon"><i class="fa-solid fa-trash" onclick="deleteProduct('{{ $row->id }}', '{{ $row->name }}')"></i></button>
                            
                            <a href="{{ route('products.show', $row->id) }}" class="mx-2 action-icon"><i class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete <span id="delete_product_title"></span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                <form action="" id="delete_form" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
        function deleteProduct(id, name) {
            var url = "{{ route('products.destroy', ':id') }}";
            url = url.replace(':id', id);
            $('#delete_product_title').text(name);
            $('#delete_form').attr('action', url);
            $('#deleteModal').modal('show');
        }
    </script>
@endsection