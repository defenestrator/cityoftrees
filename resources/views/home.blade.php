@extends('layouts.app')

@section('messages')
    @if(Session::has('message'))
    @each('')
    <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
@endsection

@section('content')
<div class="flex-container content-start p-4 mx-auto">
    <div class="width-100 content-center">
            <div id="dashboard" class="text-center content-center p-3 m-3 shadow rounded-md">
                Dashboard
            </div>
        </div>
    </div>
</div>
@endsection
