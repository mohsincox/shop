@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Osodhi Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('narsari.osodhi._form')
        </div>
    </div>
@endsection