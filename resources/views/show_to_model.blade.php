{{--<div class="magnify">--}}

    {{--<!-- This is the magnifying glass which will contain the original/large version -->--}}
    {{--<div class="large"></div>--}}

    {{--<!-- This is the small image -->--}}
    {{--<img class="small" src="uploads/76104.jpg" width="200"/>--}}

{{--</div>--}}
<span class="hidden" id="url">
    {{ url('/') }}
</span>

<?php

        $base = url('/').'/uploads/';
?>

<style>
    /*Some CSS*/
    * {margin: 0; padding: 0;}
    .magnify {width: 200px; margin: 50px auto; position: relative;}

    /*Lets create the magnifying glass*/
    .large {
        width: 175px; height: 175px;
        position: absolute;
        border-radius: 100%;

        /*Multiple box shadows to achieve the glass effect*/
        box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85),
        0 0 7px 7px rgba(0, 0, 0, 0.25),
        inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

        /*Lets load up the large image first*/
        {{--background: url('http://localhost:5555/uploads/{{ $sassoBij->image }}') no-repeat;--}}
        @if(isset($sassoBij))

            background: url('{{ $base.$sassoBij->image }}') no-repeat;
            {{--background: {{ Html::image('uploads/'.$sassoBij->image) }} no-repeat;--}}/*kaj kore na*/
        @endif

        @if(isset($shakSobjiBij))
            background: url('{{ $base.$shakSobjiBij->image }}') no-repeat;
        @endif

        @if(isset($fulBij))
            background: url('{{ $base.$fulBij->image }}') no-repeat;
        @endif

        @if(isset($falojoBij))
            background: url('{{ $base.$falojoBij->image }}') no-repeat;
        @endif

        @if(isset($osodhiBij))
            background: url('{{ $base.$osodhiBij->image }}') no-repeat;
        @endif

        @if(isset($bonojoBij))
            background: url('{{ $base.$bonojoBij->image }}') no-repeat;
        @endif

        @if(isset($moslaBij))
            background: url('{{ $base.$moslaBij->image }}') no-repeat;
        @endif

        @if(isset($tontoBij))
            background: url('{{ $base.$tontoBij->image }}') no-repeat;
        @endif

        @if(isset($danaBij))
            background: url('{{ $base.$danaBij->image }}') no-repeat;
        @endif

        @if(isset($toilBij))
            background: url('{{ $base.$toilBij->image }}') no-repeat;
        @endif

        @if(isset($gobadiPoshorKhaddo))
            background: url('{{ $base.$gobadiPoshorKhaddo->image }}') no-repeat;
        @endif

        @if(isset($hasMorgirKhaddo))
            background: url('{{ $base.$hasMorgirKhaddo->image }}') no-repeat;
        @endif

        @if(isset($macherKhaddo))
            background: url('{{ $base.$macherKhaddo->image }}') no-repeat;
        @endif

        @if(isset($poshoPakhirKhaddo))
            background: url('{{ $base.$poshoPakhirKhaddo->image }}') no-repeat;
        @endif

        @if(isset($krishiKhaddo))
            background: url('{{ $base.$krishiKhaddo->image }}') no-repeat;
        @endif

        @if(isset($gobadiPoshorOsodh))
            background: url('{{ $base.$gobadiPoshorOsodh->image }}') no-repeat;
        @endif

        @if(isset($hasMorgirOsodh))
            background: url('{{ $base.$hasMorgirOsodh->image }}') no-repeat;
        @endif

        @if(isset($motsoOsodh))
            background: url('{{ $base.$motsoOsodh->image }}') no-repeat;
        @endif

        @if(isset($poshoPakhirOsodh))
            background: url('{{ $base.$poshoPakhirOsodh->image }}') no-repeat;
        @endif

        @if(isset($ful))
            background: url('{{ $base.$ful->image }}') no-repeat;
        @endif

        @if(isset($fal))
            background: url('{{ $base.$fal->image }}') no-repeat;
        @endif

        @if(isset($osodhi))
            background: url('{{ $base.$osodhi->image }}') no-repeat;
        @endif

        @if(isset($bonoj))
            background: url('{{ $base.$bonoj->image }}') no-repeat;
        @endif

        @if(isset($kaktas))
            background: url('{{ $base.$kaktas->image }}') no-repeat;
        @endif

        @if(isset($vegetables))
            background: url('{{ $base.$vegetables->image }}') no-repeat;
        @endif

        @if(isset($fruits))
            background: url('{{ $base.$fruits->image }}') no-repeat;
        @endif

        @if(isset($traps))
            background: url('{{ $base.$traps->image }}') no-repeat;
        @endif

        @if(isset($farming))
            background: url('{{ $base.$farming->image }}') no-repeat;
        @endif

        @if(isset($kitnashok))
            background: url('{{ $base.$kitnashok->image }}') no-repeat;
        @endif

        @if(isset($jontropati))
            background: url('{{ $base.$jontropati->image }}') no-repeat;
        @endif

        @if(isset($opokoron))
            background: url('{{ $base.$opokoron->image }}') no-repeat;
        @endif

        @if(isset($postika))
            background: url('{{ $base.$postika->image }}') no-repeat;
        @endif

/*hide the glass by default*/
        display: none;
    }

    /*To solve overlap bug at the edges during magnification*/
    .small { display: block; }
</style>

@if(isset($vegetables))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$vegetables->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $vegetables->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $vegetables->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $vegetables->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $vegetables->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($fruits))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$fruits->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $fruits->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $fruits->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $fruits->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $fruits->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($traps))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$traps->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $traps->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $traps->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $traps->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $traps->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($farming))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$farming->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $farming->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $farming->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $farming->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $farming->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($ful))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$ful->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $ful->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $ful->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $ful->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $ful->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($fal))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$fal->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $fal->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $fal->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $fal->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $fal->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($osodhi))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$osodhi->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $osodhi->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $osodhi->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $osodhi->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $osodhi->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($bonoj))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$bonoj->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $bonoj->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $bonoj->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $bonoj->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $bonoj->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($kaktas))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$kaktas->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $kaktas->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $kaktas->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $kaktas->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $kaktas->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($gobadiPoshorOsodh))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$gobadiPoshorOsodh->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $gobadiPoshorOsodh->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $gobadiPoshorOsodh->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $gobadiPoshorOsodh->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $gobadiPoshorOsodh->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($hasMorgirOsodh))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$hasMorgirOsodh->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $hasMorgirOsodh->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $hasMorgirOsodh->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $hasMorgirOsodh->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $hasMorgirOsodh->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($motsoOsodh))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$motsoOsodh->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $motsoOsodh->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $motsoOsodh->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $motsoOsodh->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $motsoOsodh->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($poshoPakhirOsodh))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$poshoPakhirOsodh->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $poshoPakhirOsodh->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $poshoPakhirOsodh->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $poshoPakhirOsodh->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $poshoPakhirOsodh->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($hasMorgirKhaddo))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$hasMorgirKhaddo->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $hasMorgirKhaddo->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $hasMorgirKhaddo->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $hasMorgirKhaddo->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $hasMorgirKhaddo->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($macherKhaddo))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$macherKhaddo->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $macherKhaddo->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $macherKhaddo->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $macherKhaddo->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $macherKhaddo->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($poshoPakhirKhaddo))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$poshoPakhirKhaddo->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $poshoPakhirKhaddo->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $poshoPakhirKhaddo->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $poshoPakhirKhaddo->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $poshoPakhirKhaddo->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($krishiKhaddo))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$krishiKhaddo->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $krishiKhaddo->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $krishiKhaddo->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $krishiKhaddo->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $krishiKhaddo->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($sassoBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{--<img class="small" src="uploads/{{ $sassoBij->image }}" />--}}
                    {{ Html::image('uploads/'.$sassoBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $sassoBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $sassoBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $sassoBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $sassoBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($shakSobjiBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$shakSobjiBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px;">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $shakSobjiBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $shakSobjiBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $shakSobjiBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $shakSobjiBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($fulBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$fulBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $fulBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $fulBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $fulBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $fulBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($falojoBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$falojoBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $falojoBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $falojoBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $falojoBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $falojoBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($osodhiBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$osodhiBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $osodhiBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $osodhiBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $osodhiBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $osodhiBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($bonojoBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$bonojoBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $bonojoBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $bonojoBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $bonojoBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $bonojoBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($moslaBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$moslaBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $moslaBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $moslaBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $moslaBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $moslaBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($tontoBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$tontoBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $tontoBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $tontoBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $tontoBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $tontoBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($toilBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$toilBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $toilBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $toilBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $toilBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $toilBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($danaBij))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$danaBij->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $danaBij->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $danaBij->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $danaBij->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $danaBij->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($gobadiPoshorKhaddo))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$gobadiPoshorKhaddo->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $gobadiPoshorKhaddo->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $gobadiPoshorKhaddo->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $gobadiPoshorKhaddo->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $gobadiPoshorKhaddo->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($kitnashok))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$kitnashok->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px;">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $kitnashok->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $kitnashok->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $kitnashok->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $kitnashok->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($jontropati))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$jontropati->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px;">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $jontropati->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $jontropati->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $jontropati->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $jontropati->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($opokoron))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$opokoron->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px;">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $opokoron->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $opokoron->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $opokoron->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $opokoron->description  !!}</p>
            </div>
        </div>
    </div>
@endif

@if(isset($postika))
    <div style="text-align: left">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="magnify">
                    <div class="large"></div>
                    {{ Html::image('uploads/'.$postika->image, null, ['class' => 'small', 'width' => 160, 'height' => 160]) }}
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 40px;">
                <p>{!!  '<strong>পণ্যের নাম: </strong>'. $postika->name  !!}</p>
                <p>{!!  '<strong>পণ্যের কোড: </strong>'. $postika->code  !!}</p>
                <p>{!!  '<strong>পণ্যের মূল্য: </strong>'. $postika->price  !!}</p>
                <p>{!!  '<strong>পণ্যের বিবরণ: </strong>'. $postika->description  !!}</p>
            </div>
        </div>
    </div>
@endif


<script>
    $(document).ready(function(){

        var native_width = 0;
        var native_height = 0;

        //Now the mousemove function
        $(".magnify").mousemove(function(e){
            //When the user hovers on the image, the script will first calculate
            //the native dimensions if they don't exist. Only after the native dimensions
            //are available, the script will show the zoomed version.
            if(!native_width && !native_height)
            {
                //This will create a new image object with the same image as that in .small
                //We cannot directly get the dimensions from .small because of the
                //width specified to 200px in the html. To get the actual dimensions we have
                //created this image object.
                var image_object = new Image();
                image_object.src = $(".small").attr("src");

                //This code is wrapped in the .load function which is important.
                //width and height of the object would return 0 if accessed before
                //the image gets loaded.
                native_width = image_object.width;
                native_height = image_object.height;
            }
            else
            {
                //x/y coordinates of the mouse
                //This is the position of .magnify with respect to the document.
                var magnify_offset = $(this).offset();
                //We will deduct the positions of .magnify from the mouse positions with
                //respect to the document to get the mouse positions with respect to the
                //container(.magnify)
                var mx = e.pageX - magnify_offset.left;
                var my = e.pageY - magnify_offset.top;

                //Finally the code to fade out the glass if the mouse is outside the container
                if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
                {
                    $(".large").fadeIn(100);
                }
                else
                {
                    $(".large").fadeOut(100);
                }
                if($(".large").is(":visible"))
                {
                    //The background position of .large will be changed according to the position
                    //of the mouse over the .small image. So we will get the ratio of the pixel
                    //under the mouse pointer with respect to the image and use that to position the
                    //large image inside the magnifying glass
                    var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
                    var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
                    var bgp = rx + "px " + ry + "px";

                    //Time to move the magnifying glass with the mouse
                    var px = mx - $(".large").width()/2;
                    var py = my - $(".large").height()/2;
                    //Now the glass moves with the mouse
                    //The logic is to deduct half of the glass's width and height from the
                    //mouse coordinates to place it with its center at the mouse coordinates

                    //If you hover on the image now, you should see the magnifying glass in action
                    $(".large").css({left: px, top: py, backgroundPosition: bgp});
                }
            }
        })
    })
</script>
<!-- Lets load up prefixfree to handle CSS3 vendor prefixes -->
<script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>
<!-- You can download it from http://leaverou.github.com/prefixfree/ -->

<!-- Time for jquery action -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>
