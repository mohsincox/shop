@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Posho Pakhir Osodh রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('osodh.posho_pakhi._form')
      </div>
   </div>
@endsection