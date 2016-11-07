@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Has Morgir Khaddo Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('khaddo.has_morgi._form')
        </div>
    </div>
@endsection