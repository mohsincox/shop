@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Slider Two
            <a href="{{ url("slider-two-auth/create") }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Create New
            </a>
        </h2>
        <hr>
        <div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Title One</th>
                    <th>Title Two</th>
                    <th>Title Three</th>
                    <th>Picture</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <td>{{ $slider->title_one }}</td>
                    <td>{{ $slider->title_two }}</td>
                    <td>{{ $slider->title_three }}</td>
                    <td>{{ Html::image('uploads/'.$slider->image, null, ['class' => '', 'width' => 50, 'height' => 50]) }}</td>
                    <td>{{ Html::link("slider-two-auth/$slider->id/edit", ' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {!! $sliders->render() !!}
    </div>
@endsection