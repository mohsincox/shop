@if (isset($notice))
    {!! Form::model($notice, ['url' => 'notice-auth/'.$notice->id, 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
@else
    {!! Form::open(['url' => 'notice-auth', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
@endif
<div class="form-horizontal">

    <div class="required form-group" {{ $errors->has('title') ? 'has error' : '' }}>
        {!! Form::label('title', 'Title:', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::text('title', null,['class' => 'form-control', 'placeholder' => 'Enter Title', 'autocomplete' => 'off']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('title') }}
            </span>
        </div>
    </div>

    <div class="required form-group" {{ $errors->has('description') ? 'has error' : '' }}>
        {!! Form::label('description', 'Description:', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::textarea('description', null,['class' => 'form-control', 'placeholder' => 'Enter Description', 'autocomplete' => 'off', 'rows' => 3]) !!}
            <span class="help-block text-danger">
                {{ $errors->first('description') }}
            </span>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('SUBMIT', ['class' => 'btn btn-primary col-sm-offset-3']) !!}
    </div>
</div>

{!! Form::close() !!}
