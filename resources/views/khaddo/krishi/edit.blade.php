@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Krishi Khaddo Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('khaddo.krishi._form')
        </div>
    </div>
@endsection