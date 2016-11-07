@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Has Morgir Osodh রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('osodh.has_morgi._form')
      </div>
   </div>
@endsection