@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Fashion রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('proyojon.fashion._form')
      </div>
   </div>
@endsection