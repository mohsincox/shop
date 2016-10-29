<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>


    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/owl.carousel.css') !!}
    {!! Html::style('assets/css/style.css') !!}

    {!! Html::script('assets/js/modernizr-2.6.2.min.js') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {{--<script src="js/jquery-1.12.3.min.js"></script>--}}


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
        <h2 class="title-style-1">শস্য বীজ <span class="title-under"></span></h2>

        <div class="row">

            <div class="col-md-2 col-sm-6">
                @foreach($sassoBijs as $key=>$sassoBij)
                <div class="cause fbbox">
                    <div class="zoom_01">{{ Html::image('uploads/'.$sassoBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                    <h4 class="cause-title fix"><label>{{ $sassoBij->name }}</label></h4>

                    <div class="btn-holder text-center">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="btnSassoBij" value="{{ $sassoBij->id }}"><strong>বিস্তারিত</strong></button>

                    </div>

                </div> <!-- /.cause -->
                @endforeach
            </div>

            <div class="col-md-2 col-sm-6">
                @foreach($shakSobjiBijs as $key=>$shakSobjiBij)
                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$shakSobjiBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $shakSobjiBij->name }}</label></h4>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="btnShakSobjiBij" value="{{ $shakSobjiBij->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->
                @endforeach
            </div>

            <div class="col-md-2 col-sm-6">
                @foreach($fulBijs as $key=>$fulBij)
                <div class="cause fbbox">
                    <div class="zoom_01">{{ Html::image('uploads/'.$fulBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                    <h4 class="cause-title fix"><label>{{ $fulBij->name }}</label></h4>

                    <div class="btn-holder text-center">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="ful" value="{{ $fulBij->id }}"><strong>বিস্তারিত</strong></button>

                    </div>

                </div> <!-- /.cause -->
                @endforeach
            </div>

            <div class="col-md-2 col-sm-6">
                @foreach($falojoBijs as $key=>$falojoBij)
                <div class="cause fbbox">
                    <div class="zoom_01">{{ Html::image('uploads/'.$falojoBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                    <h4 class="cause-title fix"><label>{{ $falojoBij->name }}</label></h4>

                    <div class="btn-holder text-center">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="falojo" value="{{ $falojoBij->id }}"><strong>বিস্তারিত</strong></button>

                    </div>

                </div> <!-- /.cause -->
                @endforeach
            </div>

            <div class="col-md-2 col-sm-6">
                @foreach($osodhiBijs as $key=>$osodhiBij)
                <div class="cause fbbox">
                    <div class="zoom_01">{{ Html::image('uploads/'.$osodhiBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                    <h4 class="cause-title fix"><label>{{ $osodhiBij->name }}</label></h4>

                    <div class="btn-holder text-center">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="osodhi" value="{{ $osodhiBij->id }}"><strong>বিস্তারিত</strong></button>

                    </div>

                </div> <!-- /.cause -->
                @endforeach
            </div>

            <div class="col-md-2 col-sm-6">
                @foreach($bonojoBijs as $key=>$bonojoBij)
                <div class="cause fbbox">
                    <div class="zoom_01">{{ Html::image('uploads/'.$bonojoBij->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                    <h4 class="cause-title fix"><label>{{ $bonojoBij->name }}</label></h4>

                    <div class="btn-holder text-center">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="bonojo" value="{{ $bonojoBij->id }}"><strong>বিস্তারিত</strong></button>

                    </div>

                </div> <!-- /.cause -->
                @endforeach
            </div>


        </div>
         <div>
            <p style="text-align: right">{{ Html::link('kitnashok', 'আরও') }}</p>
        </div>

    </div>

</div> <!-- /.our-causes -->


<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1">কীটনাশক <span class="title-under"></span></h2>

        <div class="row">
            @foreach($kitnashoks as $key=>$kitnashok)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$kitnashok->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $kitnashok->name }}</label></h4>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="btnKitnashok" value="{{ $kitnashok->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        <div>
            <h2 style="text-align: right">{{ Html::link('kitnashok', 'আরও') }}</h2>
        </div>

    </div>



</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1">Jontropati <span class="title-under"></span></h2>

        <div class="row">
            @foreach($jontropatis as $key=>$jontropati)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$jontropati->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $jontropati->name }}</label></h4>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="ttt" value="{{ $jontropati->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        <div>
            <h2 style="text-align: right">{{ Html::link('jontropati', 'আরও') }}</h2>
        </div>

    </div>
</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1">Opokoron <span class="title-under"></span></h2>

        <div class="row">
            @foreach($opokorons as $key=>$opokoron)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$opokoron->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $opokoron->name }}</label></h4>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="uuu" value="{{ $opokoron->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        <div>
            <h2 style="text-align: right">{{ Html::link('opokoron', 'আরও') }}</h2>
        </div>

    </div>
</div> <!-- /.our-causes -->

<div class="section-home our-causes fadeIn">

    <div class="container">


        <h2 class="title-style-1">Postika <span class="title-under"></span></h2>

        <div class="row">
            @foreach($postikas as $key=>$postika)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">

                        <div class="zoom_01">{{ Html::image('uploads/'.$postika->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $postika->name }}</label></h4>

                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="vvv" value="{{ $postika->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach

        </div>
        <div>
            <h2 style="text-align: right">{{ Html::link('postika', 'আরও') }}</h2>
        </div>

    </div>
</div> <!-- /.our-causes -->









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