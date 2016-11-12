@extends('layouts.app')

@section('content')
   <div class="container">
      <h2>Organic Farming Registration</h2>
      <hr>
      <div class="col-sm-7">
         @include('organic_food.farming._form')
      </div>
   </div>
@endsection