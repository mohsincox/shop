@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Organic Farming
            <a href="{{ url("organic-farming-auth/create") }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Create New
            </a>
        </h2>
        <hr>
        <div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>নাম</th>
                    <th>কোড </th>
                    <th>পরিমান</th>
                    <th>মূল্য</th>
                    <th>বর্ণনা</th>
                    <th>ছবি</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($foods as $food)
                <tr>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->code }}</td>
                    <td>{{ $food->quantity }}</td>
                    <td>{{ $food->price }}</td>
                    <td>{{ $food->description }}</td>
                    <td>{{ Html::image('uploads/'.$food->image, null, ['class' => '', 'width' => 50, 'height' => 50]) }}</td>
                    <td>{{ Html::link("organic-farming-auth/$food->id/edit", ' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) }}</td>

                    <td><button type="button" class="btn btn-danger btn-xs fa fa-trash" data-toggle="modal" data-target="#myModal-{{ $food->id }}"> Delete</button></td>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-{{ $food->id }}" role="dialog">
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

                                    {{ Form::open(['method' => 'DELETE', 'url' => "organic-farming-auth/$food->id"]) }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}

                                </div>
                            </div>

                        </div>
                    </div>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {!! $foods->render() !!}
    </div>
@endsection