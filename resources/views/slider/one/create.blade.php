@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Slider One Registration</h2>
      <hr>
      <div class="col-sm-7">
         @include('slider.one._form')
      </div>
   </div>
@endsection