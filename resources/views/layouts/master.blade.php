<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>SADAKA | Charity / Non-profit responsive Bootstrap HTML5 template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

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


</head>

<body>
<span class="hidden" id="url">
 {{ url('/') }}
</span>

<header class="main-header">


    <nav class="navbar navbar-static-top">

        <div class="navbar-top">

            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                            <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
                        </ul> <!-- /.header-contact  -->

                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                        </ul> <!-- /.header-social  -->

                    </div>


                </div>
            </div>

        </div>

        <div class="navbar-main">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="index.html">{{ HTML::image('assets/images/sadaka-logo.png') }}</a>

                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                    <ul class="nav navbar-nav">

                        <li><a class="is-active" href="index.html">???? ???</a></li>
                        <li>{!! Html::link('indec', '???? ???') !!}</li>
                        <li class="has-child"><a href="#">???</a>

                            <ul class="submenu">
                                <li class="submenu-item"><a href="causes.html">???? ???</a></li>
                                <li class="submenu-item"><a href="causes-single.html">???? ??? </a></li>
                                <li class="submenu-item"><a href="causes-single.html">???? ??? </a></li>
                                <li class="submenu-item"><a href="causes-single.html">???? ??? </a></li>
                            </ul>

                        </li>
                        <li class="has-child"><a href="#">CAUSES</a>

                            <ul class="submenu">
                                <li class="submenu-item"><a href="causes.html">Causes list </a></li>
                                <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                                <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                                <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                            </ul>

                        </li>
                        <li><a href="gallery.html">GALLERY</a></li>
                        <li><a href="contact.html">CONTACT</a></li>

                    </ul>

                </div> <!-- /#navbar -->

            </div> <!-- /.container -->

        </div> <!-- /.navbar-main -->


    </nav>

</header> <!-- /. main-header -->
<div class="container">
  <h1>??????</h1>
</div>
@if (Session::has('flash_notification.message'))
    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {{ Session::get('flash_notification.message') }}
    </div>
@endif


@yield('content')





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
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

</body>
</html>