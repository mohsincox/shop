@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Cosmetics রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('proyojon.cosmetics._form')
      </div>
   </div>
@endsection