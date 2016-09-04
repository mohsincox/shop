@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>শস্য বীজ</h2>
        <div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>name</th>
                    <th>code</th>
                    <th>quantity</th>
                    <th>price</th>
                    <th>description</th>
                    <th>image</th>
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
                    {{--<td>{!! Html::link("sasso-bij-auth/$bij->id", ' Delete', ['method' => 'delete','class' => 'fa fa-trash btn btn-danger btn-xs']) !!}</td>--}}
                    {{--<td>--}}
                        {{--{{ Form::open(['method' => 'DELETE', 'url' => "sasso-bij-auth/$bij->id"]) }}--}}
                        {{--{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}--}}
                        {{--{{ Form::close() }}--}}
                    {{--</td>--}}
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
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
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