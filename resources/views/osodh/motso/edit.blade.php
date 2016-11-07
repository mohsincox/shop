@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Motso Osodh Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('osodh.motso._form')
        </div>
    </div>
@endsection