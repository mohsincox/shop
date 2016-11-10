@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Organic Vegetables Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('organic_food.vegetables._form')
        </div>
    </div>
@endsection