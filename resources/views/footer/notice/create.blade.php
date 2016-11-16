@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Notice Registration</h2>
      <hr>
      <div class="col-sm-7">
         @include('footer.notice._form')
      </div>
   </div>
@endsection