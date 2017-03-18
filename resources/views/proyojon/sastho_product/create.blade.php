@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Sastho Product রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('proyojon.sastho_product._form')
      </div>
   </div>
@endsection