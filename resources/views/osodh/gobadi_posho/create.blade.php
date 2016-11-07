@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Gobadi Poshor Osodh রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('osodh.gobadi_posho._form')
      </div>
   </div>
@endsection