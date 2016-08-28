@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.partial.menu')
        <h2>Shak Sobji  বীজ রেজিস্ট্রেশন</h2>
        <hr>
        <div class="col-sm-7">
            @include('bij.shak_sobji_bij._form')
        </div>
    </div>
@endsection