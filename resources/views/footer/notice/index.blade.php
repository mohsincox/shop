@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Notice
            <a href="{{ url("notice-auth/create") }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Create New
            </a>
        </h2>
        <hr>
        <div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notices as $notice)
                <tr>
                    <td>{{ $notice->title }}</td>
                    <td>{{ $notice->description }}</td>
                    <td>{{ Html::link("notice-auth/$notice->id/edit", ' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) }}</td>
                    <td><button type="button" class="btn btn-danger btn-xs fa fa-trash" data-toggle="modal" data-target="#myModal-{{ $notice->id }}"> Delete</button></td>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-{{ $notice->id }}" role="dialog">
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

                                    {{ Form::open(['method' => 'DELETE', 'url' => "notice-auth/$notice->id"]) }}
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

        {!! $notices->render() !!}
    </div>
@endsection