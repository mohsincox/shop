@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Motso Osodh
            <a href="{{ url("motso-osodh-auth/create") }}" class="btn btn-primary pull-right">
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
                @foreach($osodhs as $osodh)
                <tr>
                    <td>{{ $osodh->name }}</td>
                    <td>{{ $osodh->code }}</td>
                    <td>{{ $osodh->quantity }}</td>
                    <td>{{ $osodh->price }}</td>
                    <td>{{ $osodh->description }}</td>
                    <td>{{ Html::image('uploads/'.$osodh->image, null, ['class' => '', 'width' => 50, 'height' => 50]) }}</td>
                    <td>{{ Html::link("motso-osodh-auth/$osodh->id/edit", ' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) }}</td>

                    <td><button type="button" class="btn btn-danger btn-xs fa fa-trash" data-toggle="modal" data-target="#myModal-{{ $osodh->id }}"> Delete</button></td>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-{{ $osodh->id }}" role="dialog">
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

                                    {{ Form::open(['method' => 'DELETE', 'url' => "motso-osodh-auth/$osodh->id"]) }}
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

        {!! $osodhs->render() !!}
    </div>
@endsection