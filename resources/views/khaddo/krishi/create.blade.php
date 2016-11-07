@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Krishi Khaddo রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('khaddo.krishi._form')
      </div>
   </div>
@endsection