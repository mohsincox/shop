@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>bonojo Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('bij.bonojo_bij._form')
        </div>
    </div>
@endsection