@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Address
            <a href="{{ url("thikana-auth/create") }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Create New
            </a>
        </h2>
        <hr>
        <div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Office</th>
                    <th>Account No.</th>

                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($thikanas as $thikana)
                <tr>
                    <td>{{ $thikana->office }}</td>
                    <td>{{ $thikana->account_no }}</td>
                    <td>{{ Html::link("thikana-auth/$thikana->id/edit", ' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {!! $thikanas->render() !!}
    </div>
@endsection