@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Macher Khaddo রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('khaddo.mach._form')
      </div>
   </div>
@endsection