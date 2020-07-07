@extends('layouts.app')

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
@auth
<product-detail :product="{{ $product }}" :initial_user="'{{ Auth::user()->uuid }}'"> </product-detail>
@endauth

@guest
<product-detail :product="{{ $product }}" :initial_user="'0'"> </product-detail>
@endguest
@stop

@section('bottom')
@stop

@section('page_scripts')

@stop
