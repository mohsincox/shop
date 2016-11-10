@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Kastas রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('narsari.kaktas._form')
      </div>
   </div>
@endsection