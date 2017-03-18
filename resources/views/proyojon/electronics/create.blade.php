@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Electronics রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('proyojon.electronics._form')
      </div>
   </div>
@endsection