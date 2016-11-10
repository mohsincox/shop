@if (isset($slider))
    {!! Form::model($slider, ['url' => 'slider-one-auth/'.$slider->id, 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
@else
    {!! Form::open(['url' => 'slider-one-auth', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
@endif
<div class="form-horizontal">
    <div class="required form-group" {{ $errors->has('title_one') ? 'has error' : '' }}>
        {!! Form::label('title_one', 'Title One', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::text('title_one', null,['class' => 'form-control', 'placeholder' => 'Enter Title One', 'autocomplete' => 'off']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('title_one') }}
            </span>
        </div>
    </div>

    <div class="required form-group" {{ $errors->has('title_two') ? 'has error' : '' }}>
        {!! Form::label('title_two', 'Title Two', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::text('title_two', null,['class' => 'form-control', 'placeholder' => 'Enter Title Two', 'autocomplete' => 'off']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('title_two') }}
            </span>
        </div>
    </div>

    <div class="required form-group" {{ $errors->has('title_three') ? 'has error' : '' }}>
        {!! Form::label('title_three', 'Title Three', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::text('title_three', null,['class' => 'form-control', 'placeholder' => 'Enter Title Three', 'autocomplete' => 'off']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('title_three') }}
            </span>
        </div>
    </div>

    <div class="form-group required" {{ $errors->has('image') ? 'has error' : '' }}>
        {!! Form::label('image', 'Slider One', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::file('image', ['class' => 'form-control', 'onchange' => 'readURL(this)', 'required']) !!}
        </div>
        <span class="help-block">
            {{ $errors->first('image') }}
        </span>
        <div class="col-sm-offset-3">
            {{ Html::image('#', 'your image',['id' => 'blah']) }}
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('SUBMIT', ['class' => 'btn btn-primary col-sm-offset-3']) !!}
    </div>
</div>

{!! Form::close() !!}
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(140);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>