<div class="col-sm-12">
    <div class="col-sm-6">
        {{ Html::image('uploads/'.$sassoBij->image) }}
    </div>
    <div class="col-sm-6">
        <p>{!!  '<strong>Name: </strong>'. $sassoBij->name  !!}</p>
        <p>{!!  '<strong>Code: </strong>'. $sassoBij->code  !!}</p>
        <p>{!!  '<strong>Price: </strong>'. $sassoBij->price  !!}</p>
    </div>
    {{--<h4>{{'Balance of '.$sassoBij->name.' is dfohgfofhg jgfjiifdg jifiguuijghfj '.$sassoBij->image }}</h4>--}}
</div>
<div class="col-sm-12">
    {!!  '<b>Description: </b>'. $sassoBij->description  !!}
</div>
