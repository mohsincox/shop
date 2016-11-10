@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Osodhi রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('narsari.osodhi._form')
      </div>
   </div>
@endsection