@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>যন্ত্রপাতি রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('jontropati._form')
      </div>
   </div>
@endsection