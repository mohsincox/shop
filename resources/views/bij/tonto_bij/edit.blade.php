@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>tonto bij Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('bij.tonto_bij._form')
        </div>
    </div>
@endsection