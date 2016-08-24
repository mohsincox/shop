@extends('layouts.master')

@section('content')





    <!-- Carousel
    ================================================== -->
    {{--<div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">--}}

        {{--<!-- Indicators -->--}}
        {{--<ol class="carousel-indicators">--}}
            {{--<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>--}}
            {{--<li data-target="#homeCarousel" data-slide-to="1"></li>--}}
            {{--<li data-target="#homeCarousel" data-slide-to="2"></li>--}}
        {{--</ol>--}}

        {{--<div class="carousel-inner" role="listbox">--}}

            {{--<div class="item active">--}}

                {{--<img src="assets/images/slider/home-slider-1.jpg" alt="">--}}

                {{--<div class="container">--}}

                    {{--<div class="carousel-caption">--}}

                        {{--<h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>--}}
                        {{--<h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>--}}
                        {{--<a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>--}}

                    {{--</div> <!-- /.carousel-caption -->--}}

                {{--</div>--}}

            {{--</div> <!-- /.item -->--}}


            {{--<div class="item ">--}}

                {{--<img src="assets/images/slider/home-slider-2.jpg" alt="">--}}

                {{--<div class="container">--}}

                    {{--<div class="carousel-caption">--}}

                        {{--<h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>--}}
                        {{--<h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>--}}
                        {{--<a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>--}}

                    {{--</div> <!-- /.carousel-caption -->--}}

                {{--</div>--}}

            {{--</div> <!-- /.item -->--}}




            {{--<div class="item ">--}}

                {{--<img src="assets/images/slider/home-slider-3.jpg" alt="">--}}

                {{--<div class="container">--}}

                    {{--<div class="carousel-caption">--}}

                        {{--<h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>--}}
                        {{--<h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>--}}
                        {{--<a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>--}}

                    {{--</div> <!-- /.carousel-caption -->--}}

                {{--</div>--}}

            {{--</div> <!-- /.item -->--}}

        {{--</div>--}}

        {{--<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">--}}
            {{--<span class="fa fa-angle-left" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}

        {{--<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">--}}
            {{--<span class="fa fa-angle-right" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}

    {{--</div><!-- /.carousel -->--}}

    {{--<div class="section-home about-us fadeIn animated">--}}

        {{--<div class="container">--}}

            {{--<div class="row">--}}

                {{--<div class="col-md-3 col-sm-6">--}}

                    {{--<div class="about-us-col">--}}

                        {{--<div class="col-icon-wrapper">--}}
                            {{--<img src="assets/images/icons/our-mission-icon.png" alt="">--}}
                        {{--</div>--}}
                        {{--<h3 class="col-title">our mission</h3>--}}
                        {{--<div class="col-details">--}}

                            {{--<p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>--}}

                        {{--</div>--}}
                        {{--<a href="#" class="btn btn-primary"> Read more </a>--}}

                    {{--</div>--}}

                {{--</div>--}}


                {{--<div class="col-md-3 col-sm-6">--}}

                    {{--<div class="about-us-col">--}}

                        {{--<div class="col-icon-wrapper">--}}
                            {{--<img src="assets/images/icons/make-donation-icon.png" alt="">--}}
                        {{--</div>--}}
                        {{--<h3 class="col-title">Make donations</h3>--}}
                        {{--<div class="col-details">--}}

                            {{--<p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>--}}

                        {{--</div>--}}
                        {{--<a href="#" class="btn btn-primary"> Read more </a>--}}

                    {{--</div>--}}

                {{--</div>--}}


                {{--<div class="col-md-3 col-sm-6">--}}

                    {{--<div class="about-us-col">--}}

                        {{--<div class="col-icon-wrapper">--}}
                            {{--<img src="assets/images/icons/help-icon.png" alt="">--}}
                        {{--</div>--}}
                        {{--<h3 class="col-title">Help & support</h3>--}}
                        {{--<div class="col-details">--}}

                            {{--<p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>--}}

                        {{--</div>--}}
                        {{--<a href="#" class="btn btn-primary"> Read more </a>--}}

                    {{--</div>--}}

                {{--</div>--}}


                {{--<div class="col-md-3 col-sm-6">--}}

                    {{--<div class="about-us-col">--}}

                        {{--<div class="col-icon-wrapper">--}}
                            {{--<img src="assets/images/icons/programs-icon.png" alt="">--}}
                        {{--</div>--}}
                        {{--<h3 class="col-title">our programs</h3>--}}
                        {{--<div class="col-details">--}}

                            {{--<p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>--}}

                        {{--</div>--}}
                        {{--<a href="#" class="btn btn-primary"> Read more </a>--}}

                    {{--</div>--}}

                {{--</div>--}}



            {{--</div>--}}

        {{--</div>--}}

    {{--</div> <!-- /.about-us -->--}}

    {{--<div class="section-home home-reasons">--}}

        {{--<div class="container">--}}

            {{--<div class="row">--}}

                {{--<div class="col-md-6">--}}

                    {{--<div class="reasons-col animate-onscroll fadeIn">--}}

                        {{--<img src="assets/images/reasons/we-fight-togother.jpg" alt="">--}}

                        {{--<div class="reasons-titles">--}}

                            {{--<h3 class="reasons-title">We fight together</h3>--}}
                            {{--<h5 class="reason-subtitle">We are humans</h5>--}}

                        {{--</div>--}}

                        {{--<div class="on-hover hidden-xs">--}}

                            {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>--}}


                            {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>--}}

                            {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}


                {{--<div class="col-md-6">--}}

                    {{--<div class="reasons-col animate-onscroll fadeIn">--}}

                        {{--<img src="assets/images/reasons/we-care-about.jpg" alt="">--}}

                        {{--<div class="reasons-titles">--}}

                            {{--<h3 class="reasons-title">WE care about others</h3>--}}
                            {{--<h5 class="reason-subtitle">We are humans</h5>--}}

                        {{--</div>--}}

                        {{--<div class="on-hover hidden-xs">--}}

                            {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>--}}


                            {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>--}}

                            {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>--}}

                        {{--</div>--}}


                    {{--</div>--}}

                {{--</div>--}}


            {{--</div>--}}



        {{--</div>--}}


    {{--</div> <!-- /.home-reasons -->--}}

    {{--<div class="section-home our-causes animate-onscroll fadeIn">--}}

        {{--<div class="container">--}}

            {{--<h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>--}}

            {{--<div class="row">--}}

                {{--<div class="col-md-3 col-sm-6">--}}

                    {{--<div class="cause">--}}

                        {{--<img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">--}}

                        {{--<div class="progress cause-progress">--}}
                            {{--<div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">--}}
                                {{--10$ / 500$--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<h4 class="cause-title"><a href="#">HUNGER AND POVERTY </a></h4>--}}
                        {{--<div class="cause-details">--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.--}}
                        {{--</div>--}}

                        {{--<div class="btn-holder text-center">--}}

                            {{--<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>--}}

                        {{--</div>--}}



                    {{--</div> <!-- /.cause -->--}}

                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6">--}}

                    {{--<div class="cause">--}}

                        {{--<img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">--}}

                        {{--<div class="progress cause-progress">--}}
                            {{--<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">--}}
                                {{--400$ / 700$--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4>--}}
                        {{--<div class="cause-details">--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.--}}
                        {{--</div>--}}

                        {{--<div class="btn-holder text-center">--}}

                            {{--<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>--}}

                        {{--</div>--}}



                    {{--</div> <!-- /.cause -->--}}

                {{--</div>--}}


                {{--<div class="col-md-3 col-sm-6">--}}

                    {{--<div class="cause">--}}

                        {{--<img src="assets/images/causes/cause-rights.jpg" alt="" class="cause-img">--}}

                        {{--<div class="progress cause-progress">--}}
                            {{--<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">--}}
                                {{--400$ / 1000$--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<h4 class="cause-title"><a href="#">HUMAN RIGHTS</a></h4>--}}
                        {{--<div class="cause-details">--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.--}}
                        {{--</div>--}}

                        {{--<div class="btn-holder text-center">--}}

                            {{--<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>--}}

                        {{--</div>--}}



                    {{--</div> <!-- /.cause -->--}}

                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6">--}}

                    {{--<div class="cause">--}}

                        {{--<img src="assets/images/causes/cause-culture.jpg" alt="" class="cause-img">--}}

                        {{--<div class="progress cause-progress">--}}
                            {{--<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">--}}
                                {{--400$ / 700$--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<h4 class="cause-title"><a href="#">ARTS AND CULTURE </a></h4>--}}
                        {{--<div class="cause-details">--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.--}}
                        {{--</div>--}}

                        {{--<div class="btn-holder text-center">--}}

                            {{--<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>--}}

                        {{--</div>--}}



                    {{--</div> <!-- /.cause -->--}}

                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}

    {{--</div> <!-- /.our-causes -->--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $(function() {
        $(document).on('click', '#btn', function() {
            //$('#hamba').text($(this).val());
            var sasshoBijId = $(this).val();
            var value = 'id='+sasshoBijId;
            var u = $('#url').html();
            //alert(value);
            //console.log(u);
            $url = u+"/show-to-model";
            console.log($url);
            $.ajax({
                type:"GET",
                url:$url,
                data:value
            }).success(function(data) {
                $('#hamba').html(data);
            })
                    .error(function (data) {
                    });
        });
    });
</script>

<div class="section-home our-causes animate-onscroll fadeIn">

    <div class="container">

        <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

        <div class="row">
            @foreach($sossoBijs as $key=>$bij)
            <div class="col-md-3 col-sm-6">

                <div class="cause">

                    {{--<img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">--}}
                    {{ Html::image('uploads/'.$bij->image) }}
                    <h4 class="cause-title">{{ $bij->name }}</h4>

                    <div class="btn-holder text-center">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#donateModal" id="btn" value="{{ $bij->id }}"> DONATE NOW</button>

                    </div>

                </div> <!-- /.cause -->

            </div>
            @endforeach

        </div>

    </div>

</div> <!-- /.our-causes -->






{{--<div class="section-home our-sponsors animate-onscroll fadeIn">--}}

    {{--<div class="container">--}}

        {{--<h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>--}}

        {{--<ul class="owl-carousel list-unstyled list-sponsors">--}}

            {{--<li> <img src="assets/images/sponsors/bus.png" alt=""></li>--}}
            {{--<li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>--}}
            {{--<li> <img src="assets/images/sponsors/one-world.png" alt=""></li>--}}
            {{--<li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>--}}
            {{--<li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>--}}

            {{--<li> <img src="assets/images/sponsors/bus.png" alt=""></li>--}}
            {{--<li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>--}}
            {{--<li> <img src="assets/images/sponsors/one-world.png" alt=""></li>--}}
            {{--<li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>--}}
            {{--<li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>--}}

        {{--</ul>--}}

    {{--</div>--}}

{{--</div> <!-- /.our-sponsors -->--}}





<footer class="main-footer">

    <div class="footer-top">

    </div>


    <div class="footer-main">
        <div class="container">

            <div class="row">
                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">About us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <p>
                                <strong>Sadaka</strong> ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                            </p>

                            <p>
                                ILorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                        <div class="footer-content">
                            <ul class="tweets list-unstyled">
                                <li class="tweet">

                                    20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4

                                </li>

                                <li class="tweet">

                                    20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4

                                </li>

                                <li class="tweet">

                                    20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4

                                </li>

                            </ul>
                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <div class="footer-form">

                                <div class="footer-form" >

                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">

                                            </div>

                                            <div class="alert alert-danger" role="alert">

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="clearfix"></div>



            </div>


        </div>


    </div>

    <div class="footer-bottom">

        <div class="container text-right">
            Sadaka @ copyrights 2015 - by <a href="http://www.ouarmedia.com" target="_blank">Ouarmedia</a>
        </div>
    </div>

</footer> <!-- main-footer -->




    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
                </div>
                <div class="modal-body">

                    <div class="footer-form">

                        <span id="hamba"></span>
                        <hr>
                        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>

                        <div class="form-horizontal footer-form" >

                            <form action="store-customer" class="ajax-for" method="post">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="form-group" {{ $errors->has('customer_name') ? 'has error' : '' }}>
                                    {!! Form::label('customer_name', 'নাম:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('customer_name', null,['class' => 'form-control', 'placeholder' => 'নাম', 'autocomplete' => 'off']) !!}
                                        <span class="help-block text-danger">
                                            {{ $errors->first('customer_name') }}
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group" {{ $errors->has('product_name') ? 'has error' : '' }}>
                                    {!! Form::label('product_name', 'product ar নাম:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('product_name', null,['class' => 'form-control', 'placeholder' => 'নাম', 'autocomplete' => 'off']) !!}
                                        <span class="help-block text-danger">
                                            {{ $errors->first('product_name') }}
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group" {{ $errors->has('quantity') ? 'has error' : '' }}>
                                    {!! Form::label('quantity', 'Poriman:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('quantity', null,['class' => 'form-control', 'placeholder' => 'নাম', 'autocomplete' => 'off']) !!}
                                        <span class="help-block text-danger">
                                            {{ $errors->first('quantity') }}
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group" {{ $errors->has('mobile') ? 'has error' : '' }}>
                                    {!! Form::label('mobile', 'Mobile:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('mobile', null,['class' => 'form-control', 'placeholder' => 'নাম', 'autocomplete' => 'off']) !!}
                                        <span class="help-block text-danger">
                                            {{ $errors->first('mobile') }}
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group" {{ $errors->has('address') ? 'has error' : '' }}>
                                    {!! Form::label('address', 'address:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::textarea('address', null,['class' => 'form-control', 'placeholder' => 'নাম', 'autocomplete' => 'off', 'rows' => 3, 'required']) !!}
                                        <span class="help-block text-danger">
                                            {{ $errors->first('address') }}
                                        </span>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary pull-right" >DONATE NOW</button>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>




                </div>
            </div>
        </div>

    </div> <!-- /.modal -->




@endsection