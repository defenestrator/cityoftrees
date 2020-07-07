@extends('layouts._master')

@section('title')

@parent
@stop

@section('page_styles')
    <style>

    </style>
@stop

@section('top')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div id="errors">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
                <a style="margin:0 0.2rem;" href="/admin/products/create">
                    <button class="btn btn-primary">
                        Add New
                    </button>
                </a>
                <a style="margin:0 0.2rem;" onclick="deleteStrain({{ $product->id }})" >
                    <button class="btn btn-danger">
                        Delete
                    </button>
                </a>
                <a style="margin:0 0.2rem;" href="/admin/products">
                    <button class="btn btn-warning">
                        Show List
                    </button>
                </a>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4 info">
            <img style="" id="preview" src="{{$product->image}}" />
        </div>
        <div class="col-md-8" style="margin-top:1em;">
            <form class="form-horizontal new-content" role="form" enctype="multipart/form-data" method="POST" action="{{route('admin.products.update', $product->id)}}">
                @csrf
                <div class="form-group row col-md-12">
                <!-- Header Photo Button -->
                <label class="btn btn-warning btn-file">
                    Change Image <input type="file" style="display: none;" onchange="previewFile()" name="image" value="{{$product->image}}" >
                </label>
                </div>
                <div class="form-group row">
                    <div class="col-md-12"><p>Name:</p>
                    <input id="name" name="name" class="form-control input" type="text" placeholder="name" value="{{$product->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12"><p>Genetics:</p>
                    <input id="genetics" name="genetics" class="form-control input" type="text" placeholder="genetics" value="{{$product->genetics}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <p>Description:</p>
                        <textarea name="description" class="form-control">{{$product->description}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                        {{-- <div class="col-md-4">
                            <label for="feminized">Fem?</label>
                            <input type="checkbox" name="feminized" id="feminized" {{$femValue}} />
                        </div> --}}
                        <div class="col-md-4">
                            <label for="published">Published?</label>
                            <input type="checkbox" name="published" id="published" {{$pubValue}} />
                        </div>
                        <div class="col-md-4">
                            <label for="s1">S1?</label>
                            <input type="checkbox" name="s1" id="s1" {{ $s1Value }}/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="min_flowering_time">Min Weeks</label>
                            <input name="min_flowering_time" type="number" min="6" max="15" default="9" id="min_flowering_time" value="{{$product->flowering_time_min_weeks}}" />
                        </div>
                        <div class="col-md-6">
                            <label for="max_flowering_time">Max Weeks</label>
                            <input type="number" min="6" max="15" default="9" name="max_flowering_time" id="max_flowering_time" value="{{$product->flowering_time_max_weeks}}" />
                        </div>
                    </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <button style="width:100%;" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('bottom')
@stop

@section('page_scripts')
<script>
function previewFile() {
  var preview = document.querySelector('#preview');
  var original = document.querySelector('#original');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.addEventListener("load", function () {
    preview.src = reader.result;
    preview.style =  'width:100%; display:block;';
    preview.classList = 'info';
    original.style = 'display:none;';
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }

}
function deleteStrain(id) {
    if(confirm("Are you sure you want to delete this product?")) { return window.location.href = "/admin/products/destroy/" + String(id) }

    return false;
}
</script>

@stop
