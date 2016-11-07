@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>dana bij Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('bij.dana_bij._form')
        </div>
    </div>
@endsection