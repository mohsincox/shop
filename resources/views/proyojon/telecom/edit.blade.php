@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Telecom Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('proyojon.telecom._form')
        </div>
    </div>
@endsection