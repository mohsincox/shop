@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>শস্য বীজ</h2>
        <a href="{{ url("sasso-bij-auth/create") }}" class="btn btn-primary pull-right">
            <i class="fa fa-plus"></i> Create New
        </a>
        <div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>নাম</th>
                    <th>কোড </th>
                    <th>পরিমান</th>
                    <th>মূল্য</th>
                    <th>বর্ণনা</th>
                    <th>ছবি</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sassoBijs as $bij)
                <tr>
                    <td>{{ $bij->name }}</td>
                    <td>{{ $bij->code }}</td>
                    <td>{{ $bij->quantity }}</td>
                    <td>{{ $bij->price }}</td>
                    <td>{{ $bij->description }}</td>
                    <td>{{ Html::image('uploads/'.$bij->image, null, ['class' => '', 'width' => 50, 'height' => 50]) }}</td>
                    <td>{{ Html::link("sasso-bij-auth/$bij->id/edit", ' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) }}</td>

                    <td><button type="button" class="btn btn-danger btn-xs fa fa-trash" data-toggle="modal" data-target="#myModal"> Delete</button></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">DELETE</h4>
                    </div>
                    <div class="modal-body">
                        <p>Do you want to delete this item?</p>
                    </div>
                    <div class="modal-footer">
                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                        {{ Form::open(['method' => 'DELETE', 'url' => "sasso-bij-auth/$bij->id"]) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </div>

            </div>
        </div>
        {!! $sassoBijs->render() !!}
    </div>
@endsection