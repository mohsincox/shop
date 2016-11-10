@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Bonoj রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('narsari.bonoj._form')
      </div>
   </div>
@endsection