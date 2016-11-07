@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Posho Pakhir Khaddo রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('khaddo.posho_pakhi._form')
      </div>
   </div>
@endsection