@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crockeries Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('proyojon.crockeries._form')
        </div>
    </div>
@endsection