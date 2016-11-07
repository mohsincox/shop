@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Posho Pakhir Khaddo Edit</h2>
        <hr>
        <div class="col-sm-7">
            @include('khaddo.posho_pakhi._form')
        </div>
    </div>
@endsection