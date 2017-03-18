@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Lab Equipment রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('proyojon.lab_equipment._form')
      </div>
   </div>
@endsection