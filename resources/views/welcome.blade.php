<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>কৃষি হাট</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <link rel='shortcut icon' type='image/x-icon' href='assets/images/favicon.ico'/>
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/owl.carousel.css') !!}
    {!! Html::style('assets/css/style.css') !!}

    {!! Html::script('assets/js/modernizr-2.6.2.min.js') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery-1.12.3.min.js"></script>


</head>

<body>
<span class="hidden" id="url">
 {{ url('/') }}
</span>


@include('layouts.partial.home_page_menu')
 <!-- /. main-header -->

@include('layouts.partial.flash')


{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}




<!-- Carousel
    ================================================== -->
{{--@include('layouts.partial.search_mobile')--}}
@include('layouts.partial.slider')

<!-- /.carousel -->
{{--<div>--}}
    {{--<input type="text" id="search-criteria"/>--}}
{{--</div>--}}
<div class="section-home our-causes fadeIn">

    <div class="container">

        @include('layouts.partial.search_mobile')

        <h2 class="title-style-1"></b>বীজ (SEEDS)<span class="title-under"></span></h2>
        {{ Html::link('kitnashok', 'আরও বীজ দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">

            @foreach($shakSobjiBijs as $key=>$shakSobjiBij)
                <div class="col-md-2 col-sm-6">
                    
                        <div class="cause fbbox">
                            <div class="zoom_01">{{ Html::image('uploads/'.$shakSobjiBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                            <h4 class="cause-title fix"><label>{{ $shakSobjiBij->name }}</label></h4>
                            <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                                <li style="list-style: none;" class="cause-title fix">{{ $shakSobjiBij->quantity }}</li>
                                <li style="list-style: none;" class="cause-title fix">{{ $shakSobjiBij->price }}</li>
                            </ul>


                            <div class="btn-holder text-center">

                                <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="btnShakSobjiBij" value="{{ $shakSobjiBij->id }}"><strong>বিস্তারিত</strong></button>

                            </div>

                        </div> <!-- /.cause -->
                    
                </div>
            @endforeach

            @foreach($moslaBijs as $key=>$bij)
                <div class="col-md-2 col-sm-6"> 
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$bij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $bij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $bij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $bij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="mosla1" value="{{ $bij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause --> 
                </div>
            @endforeach

            @foreach($fulBijs as $key=>$fulBij)
                <div class="col-md-2 col-sm-6"> 
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$fulBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $fulBij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $fulBij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $fulBij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="ful" value="{{ $fulBij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->
                </div>
            @endforeach

            @foreach($falojoBijs as $key=>$falojoBij)
                <div class="col-md-2 col-sm-6">
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$falojoBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $falojoBij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $falojoBij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $falojoBij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="falojo" value="{{ $falojoBij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->  
                </div>
            @endforeach

            @foreach($tontoBijs as $key=>$bij)
                <div class="col-md-2 col-sm-6"> 
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$bij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $bij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $bij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $bij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="tonto1" value="{{ $bij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause --> 
                </div>
            @endforeach

            @foreach($toilBijs as $key=>$bij)
                <div class="col-md-2 col-sm-6"> 
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$bij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $bij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $bij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $bij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="toil1" value="{{ $bij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause --> 
                </div>
            @endforeach

            @foreach($danaBijs as $key=>$bij)
                <div class="col-md-2 col-sm-6"> 
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$bij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $bij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $bij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $bij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="dana1" value="{{ $bij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause --> 
                </div>
            @endforeach

            @foreach($sassoBijs as $key=>$sassoBij)
                <div class="col-md-2 col-sm-6"> 
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$sassoBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $sassoBij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $sassoBij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $sassoBij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="btnSassoBij" value="{{ $sassoBij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause --> 
                </div>
            @endforeach

            @foreach($osodhiBijs as $key=>$osodhiBij)
                <div class="col-md-2 col-sm-6"> 
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$osodhiBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $osodhiBij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $osodhiBij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $osodhiBij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="osodhi" value="{{ $osodhiBij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause --> 
                </div>
            @endforeach

            @foreach($bonojoBijs as $key=>$bonojoBij)
                <div class="col-md-2 col-sm-6">
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$bonojoBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $bonojoBij->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $bonojoBij->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $bonojoBij->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="bonojo" value="{{ $bonojoBij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>
                    </div> <!-- /.cause --> 
                </div>
            @endforeach
        </div>
    </div>
</div> <!-- /.our-causes -->


<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1" style="margin-top: -30px;">খাদ্য <span class="title-under"></span></h2>
        {{ Html::link('khaddo', 'আরও খাদ্য দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">
            @foreach($gobadiPoshorKhaddos as $key=>$khaddo)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$khaddo->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $khaddo->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="gobadi-poshor-khaddo" value="{{ $khaddo->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($hasMorgirKhaddos as $key=>$khaddo)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$khaddo->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $khaddo->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="has-morgir-khaddo" value="{{ $khaddo->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($macherKhaddos as $key=>$khaddo)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$khaddo->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $khaddo->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="macher-khaddo" value="{{ $khaddo->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($poshoPakhirKhaddos as $key=>$khaddo)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$khaddo->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $khaddo->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="posho-pakhir-khaddo" value="{{ $khaddo->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($krishiKhaddos as $key=>$khaddo)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$khaddo->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $khaddo->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $khaddo->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="krishi-khaddo" value="{{ $khaddo->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        
    </div>

</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1" style="margin-top: -30px;">ঔষধ <span class="title-under"></span></h2>
        {{ Html::link('osodh', 'আরও ঔষধ দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">
            @foreach($gobadiPoshorOsodhs as $key=>$osodh)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$osodh->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $osodh->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $osodh->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $osodh->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="gobadi-poshor-osodh" value="{{ $osodh->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($hasMorgirOsodhs as $key=>$osodh)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$osodh->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $osodh->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $osodh->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $osodh->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="gobadi-poshor-osodh" value="{{ $osodh->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($motsoOsodhs as $key=>$osodh)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$osodh->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $osodh->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $osodh->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $osodh->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="gobadi-poshor-osodh" value="{{ $osodh->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($poshoPakhirOsodhs as $key=>$osodh)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$osodh->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $osodh->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $osodh->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $osodh->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="gobadi-poshor-osodh" value="{{ $osodh->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        
    </div>

</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1" style="margin-top: -30px;">কীটনাশক <span class="title-under"></span></h2>
        {{ Html::link('kitnashok', 'আরও কীটনাশক দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">
            @foreach($kitnashoks as $key=>$kitnashok)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$kitnashok->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $kitnashok->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $kitnashok->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $kitnashok->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="btnKitnashok" value="{{ $kitnashok->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        
    </div>

</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1"  style="margin-top: -30px;">যন্ত্রপাতি  <span class="title-under"></span></h2>
        {{ Html::link('kitnashok', 'আরও যন্ত্রপাতি দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">
            @foreach($jontropatis as $key=>$jontropati)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$jontropati->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $jontropati->name }}</label></h4>
                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $jontropati->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $jontropati->price }}</li>
                        </ul>
                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="ttt" value="{{ $jontropati->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
    </div>
</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1" style="margin-top: -30px;">উপকরণ <span class="title-under"></span></h2>
        {{ Html::link('kitnashok', 'আরও উপকরণ দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">
            @foreach($opokorons as $key=>$opokoron)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$opokoron->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $opokoron->name }}</label></h4>
                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $opokoron->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $opokoron->price }}</li>
                        </ul>
                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="uuu" value="{{ $opokoron->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
    </div>
</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1" style="margin-top: -30px;">নার্সারী <span class="title-under"></span></h2>
        {{ Html::link('narsari', 'আরও নার্সারী দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">
            @foreach($fuls as $key=>$narsari)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$narsari->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $narsari->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="ful" value="{{ $narsari->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($fals as $key=>$narsari)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$narsari->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $narsari->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="fal" value="{{ $narsari->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($osodhis as $key=>$narsari)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$narsari->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $narsari->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="osodhi" value="{{ $narsari->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($bonojs as $key=>$narsari)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$narsari->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $narsari->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="bonoj" value="{{ $narsari->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($kaktas as $key=>$narsari)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$narsari->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $narsari->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $narsari->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="kaktas" value="{{ $narsari->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        
    </div>

</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1" style="margin-top: -30px;">অর্গানিক ফুড<span class="title-under"></span></h2>
        {{ Html::link('organic-food', 'আরও অর্গানিক ফুড দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">
            @foreach($organicVegetables as $key=>$food)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$food->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $food->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $food->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $food->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="vegetables" value="{{ $food->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($organicFruits as $key=>$food)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$food->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $food->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $food->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $food->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="fruits" value="{{ $food->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($traps as $key=>$food)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$food->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $food->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $food->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $food->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="traps" value="{{ $food->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

            @foreach($organicFarmings as $key=>$food)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$food->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $food->name }}</label></h4>

                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $food->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $food->price }}</li>
                        </ul>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="farming" value="{{ $food->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        
    </div>

</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1" style="margin-top: -30px;">পুস্তিকা <span class="title-under"></span></h2>
        {{ Html::link('kitnashok', 'আরও পুস্তিকা দেখুন', ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: -50px; font-weight: bold;']) }}
        <div class="row">
            @foreach($postikas as $key=>$postika)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$postika->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $postika->name }}</label></h4>
                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $postika->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $postika->price }}</li>
                        </ul>
                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="vvv" value="{{ $postika->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
    </div>
</div> <!-- /.our-causes -->






@include('layouts.partial.marquee')


@include('layouts.partial.footer')

 <!-- main-footer -->




<!-- Donate Modal -->
@include('layouts.partial.modal')
 <!-- /.modal -->





            <!--  Scripts
================================================== -->

    <!-- jQuery -->
{!! Html::script('js/sasso_bij.js') !!}
    {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
    {!! Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') !!}
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>
    {{--{!! Html::script(window.jQuery || document.write('{!! Html::script('assets/js/jquery-1.11.1.min.js') !!}')) !!}--}}

    <!-- Bootsrap javascript file -->
    {{--<script src="assets/js/bootstrap.min.js"></script>--}}
    {!! Html::script('assets/js/bootstrap.min.js') !!}

            <!-- owl carouseljavascript file -->
    {{--<script src="assets/js/owl.carousel.min.js"></script>--}}
    {!! Html::script('assets/js/owl.carousel.min.js') !!}

            <!-- Template main javascript -->
    {{--<script src="assets/js/main.js"></script>--}}
    {!! Html::script('assets/js/main.js') !!}

            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        $("#search-criteria").on("keyup", function() {
            var g = $(this).val().toLowerCase();
            $(".fbbox .fix label").each(function() {
                var s = $(this).text().toLowerCase();
                $(this).closest('.fbbox')[ s.indexOf(g) !== -1 ? 'show' : 'hide' ]();
            });
        });


        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>


</body>
</html>