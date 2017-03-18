@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Crockeries রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('proyojon.crockeries._form')
      </div>
   </div>
@endsection