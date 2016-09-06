@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>শস্য বীজ রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('bij.sasso_bij._form')
      </div>
   </div>
@endsection