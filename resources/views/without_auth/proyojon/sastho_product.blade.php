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
    <!-- Bootsrap -->
    {{--<link rel="stylesheet" href="assets/css/bootstrap.min.css">--}}
    {!! Html::style('assets/css/bootstrap.min.css') !!}
            <!-- Font awesome -->
    {{--<link rel="stylesheet" href="assets/css/font-awesome.min.css">--}}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
            <!-- Owl carousel -->
    {{--<link rel="stylesheet" href="assets/css/owl.carousel.css">--}}
    {!! Html::style('assets/css/owl.carousel.css') !!}

            <!-- Template main Css -->
    {{--<link rel="stylesheet" href="assets/css/style.css">--}}
    {!! Html::style('assets/css/style.css') !!}

            <!-- Modernizr -->
    {{--<script src="assets/js/modernizr-2.6.2.min.js"></script>--}}
    {!! Html::script('assets/js/modernizr-2.6.2.min.js') !!}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


</head>

<body>
<span class="hidden" id="url">
 {{ url('/') }}
</span>


@include('layouts.partial.home_page_menu')
        <!-- /. main-header -->

{{--@include('layouts.partial.flash')--}}




<script>
    $(function() {
        $(document).on('click', '#sastho-product', function(){
            var id = $(this).val();
            var u = $('#url').html();
            var url  = u+"/show-to-model-sastho-product?id="+ id;
            $.get(url, function (data) {
                $('#hamba').html(data);
            });

        });
    });
</script>

<!-- Carousel
    ================================================== -->
{{--@include('layouts.partial.slider')--}}
<!-- /.carousel -->

<div class="section-home our-causes fadeIn">

    <div class="container">

        <div style="margin-top: 75px;" class="input-group col-md-3 pull-right">
            <input id="search-criteria" type="text" class="search-query form-control" placeholder="Search" />
        </div>
        <h2 class="title-style-1" style="margin-top: 110px;">মেডিকেল ইকুপমেন্ট<span class="title-under"></span></h2>

        <div class="row">
            @foreach($sasthoProducts as $key=>$proyojon)
                <div class="col-md-2 col-sm-6">

                    <div class="cause fbbox">
                        <div class="zoom_01">{{ Html::image('uploads/'.$proyojon->image, null, ['class' => 'center-block', 'width' => 160, 'height' => 160]) }}</div>
                        <h4 class="cause-title fix"><label>{{ $proyojon->name }}</label></h4>
                        <ul style="display: flex; justify-content: space-between; padding: 5px; margin-bottom: -15px; margin-top: -15px;">
                            <li style="list-style: none;" class="cause-title fix">{{ $proyojon->quantity }}</li>
                            <li style="list-style: none;" class="cause-title fix">{{ $proyojon->price }}</li>
                        </ul>


                        <div class="btn-holder text-center">

                            <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="sastho-product" value="{{ $proyojon->id }}"><strong>বিস্তারিত</strong></button>

                        </div>

                    </div> <!-- /.cause -->

                </div>
            @endforeach



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