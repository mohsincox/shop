<div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

        <div class="item active">
            @if(isset($sliderOne))
                {{ Html::image('uploads/'.$sliderOne->image, null, ['width' => 700, 'height' => 225]) }}

                <div class="container">

                    <div class="carousel-caption">

                        <h2 class="carousel-title bounceInDown animated slow">{{ $sliderOne->title_one }}</h2>
                        <h4 class="carousel-subtitle bounceInUp animated slow ">{{ $sliderOne->title_two }}</h4>
                        <!-- <h2 class="carousel-subtitle bounceInDown animated slow ">আমার সোনার বাংলা</h2> -->
                        <h2 class="carousel-title bounceInUp animated slow">{{ $sliderOne->title_three }}</h2>
                        <!-- <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">Item Kinon</a> -->

                    </div> <!-- /.carousel-caption -->

                </div>
            @endif
        </div> <!-- /.item -->


        <div class="item ">
            @if(isset($sliderTwo))
                <!-- <img src="assets/images/slider/home-slider-2.jpg" alt=""> -->
                {{ Html::image('uploads/'.$sliderTwo->image, null, ['width' => 700, 'height' => 225]) }}

                <div class="container">

                    <div class="carousel-caption">
                    
                        <h2 class="carousel-title bounceInDown animated slow" style="color: blue;">{{ $sliderTwo->title_one }}</h2>
                        <h4 class="carousel-subtitle bounceInUp animated slow" style="color: red;">{{ $sliderTwo->title_two }}</h4>
                        <h2 class="carousel-title bounceInDown animated slow" style="color: blue;">{{ $sliderTwo->title_three }}</h2>

                    </div> <!-- /.carousel-caption -->

                </div>
            @endif
        </div> <!-- /.item -->




        <div class="item ">
            @if(isset($sliderThree))
                {{ Html::image('uploads/'.$sliderThree->image, null, ['width' => 700, 'height' => 225]) }}

                <div class="container">

                    <div class="carousel-caption">

                        <h2 class="carousel-title bounceInUp animated slow" style="color: #D1FF33">{{ $sliderThree->title_one }}</h2>
                        <h4 class="carousel-subtitle bounceInUp animated slow" style="color: #33B2FF  ">{{ $sliderThree->title_two }}</h4>
                        <h2 class="carousel-title bounceInDown animated slow" style="color: #D1FF33">{{ $sliderThree->title_three }}</h2>

                    </div> <!-- /.carousel-caption -->

                </div>
            @endif
        </div> <!-- /.item -->

    </div>

    <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>