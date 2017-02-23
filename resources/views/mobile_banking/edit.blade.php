@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Mobile Banking Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('mobile_banking._form')
        </div>
    </div>
@endsection