@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>postika রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('postika._form')
      </div>
   </div>
@endsection