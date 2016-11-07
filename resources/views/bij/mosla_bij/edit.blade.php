@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Mosla bij Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('bij.mosla_bij._form')
        </div>
    </div>
@endsection