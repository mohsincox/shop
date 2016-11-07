@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Macher Khaddo Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('khaddo.mach._form')
        </div>
    </div>
@endsection