@extends('layouts.app')

@section('content')
<script>
   let productData = {!! $product !!}
</script>

<ProductDetail id="product" />
@endsection

