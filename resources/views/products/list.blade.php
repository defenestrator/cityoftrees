@extends('layouts._master')

@section('title')

@parent
@stop

@section('page_styles')
    <style>
    </style>
@stop

@section('top')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Manage Strains</h1>
        </div>
        <div class="col-md-6">
            <a href="/admin/products/create">
                <button style="width:100%;" class="btn btn-warning">
                    New Strain
                </button>
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped table-inverse">
        <thead class="thead-inverse">
        <tr>
            <th>Pic</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell">Public</th>
            <th class="d-none d-sm-table-cell">S1</th>
            <th class="d-none d-sm-table-cell">Page</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody class="resource-list">
        @foreach($content as $product)
        <tr class="table-hover">
            <td><img src="{{$product->image}}" style="width:100px;"/></td>
            <td><strong>{{ $product->name }}</strong></td>
            <td class="d-none d-sm-table-cell">@if ($product->published == 1) <span class="primary">Yes</span> @else <span class="danger">No</span> @endif</td>
            <td class="d-none d-sm-table-cell">@if ($product->s1 == 1) <span class="primary">Yes</span> @else <span class="danger">No</span> @endif</td>
            <td class="d-none d-sm-table-cell"><a href="/products/{{$product->uuid}}" target="_blank"><button role="button" class="btn btn-primary">View</button></a></td>
            <td><a href="{{route('admin.products.edit', $product->id)}}"><button role="button" class="btn btn-warning">Edit</button></a></td>
            <td><button id="delete" role="button" class="btn btn-danger" onclick="deleteStrain({{ $product->id }})">Delete</button></td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </div>
</div>
@endsection

@section('bottom')
@stop

@section('page_scripts')
<script>
function deleteStrain(id) {
    if(confirm("Are you sure you want to delete this product?")) { return window.location.href = "/admin/products/destroy/" + String(id) }

    return false;
}
</script>
@stop
