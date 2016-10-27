@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>osodhi Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('bij.osodhi_bij._form')
        </div>
    </div>
@endsection