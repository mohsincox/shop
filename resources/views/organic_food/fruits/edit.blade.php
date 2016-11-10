@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Organic Fruits Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('organic_food.fruits._form')
        </div>
    </div>
@endsection