@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Fal Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('narsari.fal._form')
        </div>
    </div>
@endsection