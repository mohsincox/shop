<header class="main-header">


    <nav class="navbar navbar-static-top">



        <div class="navbar-main" style="padding: 20px;">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" style="margin-top: -35px" href="{{ url('/') }}">{{ HTML::image('assets/images/logo.jpg') }}</a>

                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                    <ul class="nav navbar-nav">


                        <li class="has-child">{!! Html::link('#', 'বীজ', ['style' => 'font-weight: bold;']) !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('shak-sobji-bij', 'শাকসবজি বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'মসলা বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ফুল বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ফলজ বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'তন্তু বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'তৈল বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'দানা বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('sasso-bij', 'শস্য বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ঔষধি বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'বনজ বীজ') !!}</li>
                            </ul>

                        </li>
                        <li class="has-child">{!! Html::link('#', 'খাদ্য', ['style' => 'font-weight: bold;']) !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('#', 'গবাদি পশুর খাদ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'হাঁস-মুরগীর খাদ্য') !!}</li>
                                 <li class="submenu-item">{!! Html::link('#', 'মাছের খাদ্য') !!}</li>
                                  <li class="submenu-item">{!! Html::link('#', 'পশু-পাখির খাদ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'কৃষি খাদ্য') !!}</li>
                               
                            </ul>

                        </li>
                        <li class="has-child">{!! Html::link('#', 'ঔষধ', ['style' => 'font-weight: bold;']) !!}

                            <ul class="submenu" >
                                <li class="submenu-item">{!! Html::link('#', 'গবাদি পশুর ঔষধ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'হাঁস-মুরগীর ঔষধ ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'মৎস ঔষধ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'পশু-পাখির ঔষধ') !!}</li>
                            </ul>

                        </li>
                        <li>{!! Html::link('#', 'কিটনাশক', ['style' => 'font-weight: bold;']) !!}</li>
                        
                        
                        <li>{!! Html::link('#', 'যন্ত্রপাতি', ['style' => 'font-weight: bold;']) !!}</li>
                        <li>{!! Html::link('#', 'উপকরণ', ['style' => 'font-weight: bold;']) !!}</li>
                        <li class="has-child">{!! Html::link('#', 'নার্সারী', ['style' => 'font-weight: bold;']) !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('#', 'ফুল') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ফল') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ঔষধি') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'বনজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ক্যাকটাস') !!}</li>
                            </ul>

                        </li>
                        <li class="has-child">{!! Html::link('#', 'অর্গানিক ফুড', ['style' => 'font-weight: bold;']) !!}

                            <ul class="submenu" >
                                <li class="submenu-item">{!! Html::link('#', 'Organic Vegetables') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'Organic Fruits') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'Bio-Pesticides & Traps') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'Organic Farming') !!}</li>
                            </ul>

                        </li>
                        <!-- <li>{!! Html::link('#', 'পুস্তিকা', ['style' => 'font-weight: bold;']) !!}</li> -->
                        <li>{!! Html::link('#', 'ঠিকানা/যোগাযোগ', ['style' => 'font-weight: bold;']) !!}</li>


                    </ul>



                </div> <!-- /#navbar -->



            </div> <!-- /.container -->

        </div> <!-- /.navbar-main -->


    </nav>

</header>