@if (isset($thikana))
    {!! Form::model($thikana, ['url' => 'thikana-auth/'.$thikana->id, 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
@else
    {!! Form::open(['url' => 'thikana-auth', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
@endif
<div class="form-horizontal">
    <div class="required form-group" {{ $errors->has('office') ? 'has error' : '' }}>
        {!! Form::label('office', 'Office:', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::textarea('office', null,['class' => 'form-control', 'placeholder' => 'Enter Office', 'autocomplete' => 'off', 'rows' => 3]) !!}
            <span class="help-block text-danger">
                {{ $errors->first('office') }}
            </span>
        </div>
    </div>

    <div class="required form-group" {{ $errors->has('account_no') ? 'has error' : '' }}>
        {!! Form::label('account_no', 'Account No:', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9 required">
            {!! Form::text('account_no', null,['class' => 'form-control', 'placeholder' => 'Enter Account No.', 'autocomplete' => 'off']) !!}
            <span class="help-block text-danger">
                {{ $errors->first('account_no') }}
            </span>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('SUBMIT', ['class' => 'btn btn-primary col-sm-offset-3']) !!}
    </div>
</div>

{!! Form::close() !!}
