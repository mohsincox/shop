@if(isset($sassoBij))
    <div class="col-sm-12">
        <div class="col-sm-6">
            {{ Html::image('uploads/'.$sassoBij->image) }}
        </div>
        <div class="col-sm-6">
            <p>{!!  '<strong>Name: </strong>'. $sassoBij->name  !!}</p>
            <p>{!!  '<strong>Code: </strong>'. $sassoBij->code  !!}</p>
            <p>{!!  '<strong>Price: </strong>'. $sassoBij->price  !!}</p>
        </div>

    </div>
    <div class="col-sm-12">
        {!!  '<strong>Description: </strong>'. $sassoBij->description  !!}
    </div>
@endif

@if(isset($shakSobjiBij))
    <div class="col-sm-12">
        <div class="col-sm-6">
            {{ Html::image('uploads/'.$shakSobjiBij->image) }}
        </div>
        <div class="col-sm-6">
            <p>{!!  '<strong>Name: </strong>'. $shakSobjiBij->name  !!}</p>
            <p>{!!  '<strong>Code: </strong>'. $shakSobjiBij->code  !!}</p>
            <p>{!!  '<strong>Price: </strong>'. $shakSobjiBij->price  !!}</p>
        </div>

    </div>
    <div class="col-sm-12">
        {!!  '<strong>Description: </strong>'. $shakSobjiBij->description  !!}
    </div>
@endif