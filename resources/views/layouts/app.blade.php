<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    @if (Auth::user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                বীজ <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                
                                <li><a href="{{ url('/shak-sobji-bij-auth') }}">শাকসবজি বীজ</a></li>
                                <li><a href="{{ url('/mosla-bij-auth') }}">মসলা বীজ</a></li>
                                <li><a href="{{ url('/ful-bij-auth') }}">ফুল বীজ</a></li>
                                <li><a href="{{ url('/falojo-bij-auth') }}">ফলজ বীজ</a></li>
                                <li><a href="{{ url('/tonto-bij-auth') }}">তন্তু বীজ</a></li>
                                <li><a href="{{ url('/toil-bij-auth') }}">তৈল বীজ</a></li>
                                <li><a href="{{ url('/dana-bij-auth') }}">দানা বীজ</a></li>
                                <li><a href="{{ url('/sasso-bij-auth') }}">শস্য বীজ</a></li>
                                <li><a href="{{ url('/osodhi-bij-auth') }}">ঔষধি বীজ</a></li>
                                <li><a href="{{ url('/bonojo-bij-auth') }}">বনজ বীজ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                খাবার/খাদ্য <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/gobadi-poshor-khaddo-auth') }}">গবাদি পশুর খাদ্য</a></li>
                                <li><a href="{{ url('/has-morgir-khaddo-auth') }}">হাঁস-মুরগীর খাদ্য</a></li>
                                <li><a href="{{ url('/macher-khaddo-auth') }}">মাছের খাদ্য</a></li>
                                <li><a href="{{ url('/posho-pakhir-khaddo-auth') }}">পশু-পাখির খাদ্য</a></li>
                                <li><a href="{{ url('/krishi-khaddo-auth') }}">কৃষি খাদ্য</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                ঔষধ <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/gobadi-poshor-osodh-auth') }}">গবাদি পশুর ঔষধ</a></li>
                                <li><a href="{{ url('/has-morgir-osodh-auth') }}">হাঁস-মুরগীর ঔষধ</a></li>
                                <li><a href="{{ url('/motso-osodh-auth') }}">মৎস ঔষধ</a></li>
                                <li><a href="{{ url('/posho-pakhir-osodh-auth') }}">পশু-পাখির ঔষধ</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/kitnashok-auth') }}">কিটনাশক</a></li>
                        <li><a href="{{ url('/jontropati-auth') }}">যন্ত্রপাতি</a></li>
                        <li><a href="{{ url('/opokoron-auth') }}">উপকরণ</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                নার্সারী <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/ful-auth') }}">ফুল</a></li>
                                <li><a href="{{ url('/fal-auth') }}">ফল</a></li>
                                <li><a href="{{ url('/osodhi-auth') }}">ঔষধি</a></li>
                                <li><a href="{{ url('/bonoj-auth') }}">বনজ</a></li>
                                <li><a href="{{ url('/kaktas-auth') }}">ক্যাকটাস</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                অর্গানিক ফুড <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/organic-vegetables-auth') }}">Organic Vegetables</a></li>
                                <li><a href="{{ url('/organic-fruits-auth') }}">Organic Fruits</a></li>
                                <li><a href="{{ url('/bio-pesticides-and-traps-auth') }}">Bio-Pesticides & Traps</a></li>
                                <li><a href="{{ url('/organic-farming-auth') }}">Organic Farming</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Slider<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/slider-one-auth') }}">Slider One</a></li>
                                <li><a href="{{ url('/slider-two-auth') }}">Slider Two</a></li>
                                <li><a href="{{ url('/slider-three-auth') }}">Slider Three</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Others<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/show-customer') }}">Customer</a></li>
                                <li><a href="{{ url('/mobile-auth') }}">Mobile</a></li>
                                <li><a href="{{ url('/mobile-banking-auth') }}">Mobile Banking</a></li>
                                <li><a href="{{ url('/thikana-auth') }}">Address</a></li>
                                <li><a href="{{ url('/notice-auth') }}">Comment</a></li>
                                <li><a href="{{ url('/marquee-auth') }}">Coming Soon</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @include('flash::message')
    </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
