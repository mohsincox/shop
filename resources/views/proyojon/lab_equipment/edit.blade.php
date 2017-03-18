@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lab Equipment Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('proyojon.lab_equipment._form')
        </div>
    </div>
@endsection