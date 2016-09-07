@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>কীটনাশক রেজিস্ট্রেশন</h2>
      <hr>
      <div class="col-sm-7">
         @include('kitnashok._form')
      </div>
   </div>
@endsection