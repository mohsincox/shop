@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Bio Pesticides And Traps Registration</h2>
      <hr>
      <div class="col-sm-7">
         @include('organic_food.traps._form')
      </div>
   </div>
@endsection