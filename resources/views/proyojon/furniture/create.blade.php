@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Furniture রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('proyojon.furniture._form')
      </div>
   </div>
@endsection