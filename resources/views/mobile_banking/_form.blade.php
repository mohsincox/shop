@if (isset($mobileBanking))
    {!! Form::model($mobileBanking, ['url' => 'mobile-banking-auth/'.$mobileBanking->id, 'method' => 'put', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'mobile-banking-auth', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
@endif
<div class="form-horizontal">

    <div class="required form-group" {{ $errors->has('number') ? 'has error' : '' }}>
        {!! Form::label('number', 'Number:', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::text('number', null,['class' => 'form-control', 'placeholder' => 'Enter Number', 'autocomplete' => 'off']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('number') }}
            </span>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('SUBMIT', ['class' => 'btn btn-primary col-sm-offset-3']) !!}
    </div>
</div>

{!! Form::close() !!}
