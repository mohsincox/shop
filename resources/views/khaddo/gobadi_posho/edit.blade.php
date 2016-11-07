@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Gobadi Poshor Khaddo Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('khaddo.gobadi_posho._form')
        </div>
    </div>
@endsection