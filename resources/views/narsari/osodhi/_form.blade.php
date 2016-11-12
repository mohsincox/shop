@if (isset($narsari))
    {!! Form::model($narsari, ['url' => 'osodhi-auth/'.$narsari->id, 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
@else
    {!! Form::open(['url' => 'osodhi-auth', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
@endif
<div class="form-horizontal">
    <div class="required form-group" {{ $errors->has('name') ? 'has error' : '' }}>
        {!! Form::label('name', 'নাম', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'নাম', 'autocomplete' => 'off', 'required']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('name') }}
            </span>
        </div>
    </div>

    <div class="form-group required" {{ $errors->has('code') ? 'has error' : ''}}>
        {!! Form::label('code', 'কোড ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'কোড ', 'autocomplete' => 'off', 'required']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('code') }}
            </span>
        </div>
    </div>

    <div class="form-group required" {{ $errors->has('quantity') ? 'has error' : '' }}>
        {!! Form::label('quantity', 'পরিমান', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('quantity', null, ['class' => 'form-control', 'placeholder' => 'পরিমান', 'autocomplete' => 'off', 'required']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('quantity') }}
            </span>
        </div>
    </div>

    <div class="form-group required" {{ $errors->has('price') ? 'has error' : '' }}>
        {!! Form::label('price', 'মূল্য', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'মূল্য', 'autocomplete' => 'off', 'required']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('price') }}
            </span>
        </div>
    </div>

    <div class="form-group" {{ $errors->has('description') ? 'has error' : '' }}>
        {!! Form::label('description', 'ব্যাখ্যা', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'ব্যাখ্য', 'autocomplete' => 'off', 'rows' => 4]) !!}
            <span class="help-block text-danger">
                {{ $errors->first('description') }}
            </span>
        </div>
    </div>

    <div class="form-group required" {{ $errors->has('image') ? 'has error' : '' }}>
        {!! Form::label('image', 'ছবি', ['class' => 'col-sm-3 control-label']) !!}
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