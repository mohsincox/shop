@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Mobile Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('mobile._form')
        </div>
    </div>
@endsection