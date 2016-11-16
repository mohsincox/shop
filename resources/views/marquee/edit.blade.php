@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Picture edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('marquee._form')
        </div>
    </div>
@endsection