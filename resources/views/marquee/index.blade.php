@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Pictures</h2>
        <a href="{{ url("marquee-auth/create") }}" class="btn btn-primary pull-right">
            <i class="fa fa-plus"></i> Create New
        </a>
        <div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ছবি</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($marquees as $marquee)
                <tr>

                    <td>{{ Html::image('uploads/'.$marquee->image, null, ['class' => '', 'width' => 50, 'height' => 50]) }}</td>
                    <td>{{ Html::link("marquee-auth/$marquee->id/edit", ' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) }}</td>

                    <td><button type="button" class="btn btn-danger btn-xs fa fa-trash" data-toggle="modal" data-target="#myModal-{{ $marquee->id }}"> Delete</button></td>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-{{ $marquee->id }}" role="dialog">
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

                                    {{ Form::open(['method' => 'DELETE', 'url' => "marquee-auth/$marquee->id"]) }}
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

        {!! $marquees->render() !!}
    </div>
@endsection