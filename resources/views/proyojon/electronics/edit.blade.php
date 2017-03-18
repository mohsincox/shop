@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Electronics Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('proyojon.electronics._form')
        </div>
    </div>
@endsection