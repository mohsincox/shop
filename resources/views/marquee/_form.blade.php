@if (isset($marquee))
    {!! Form::model($marquee, ['url' => 'marquee-auth/'.$marquee->id, 'method' => 'put', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'marquee-auth', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
@endif

<div class="form-group" {{ $errors->has('image') ? 'has error' : '' }}>
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