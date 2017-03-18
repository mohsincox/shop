<header class="main-header" style="position: fixed; z-index: 1; top: 0; width: 100%">

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
                                <li class="submenu-item">{!! Html::link('mosla-bij', 'মসলা বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('ful-bij', 'ফুল বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('falojo-bij', 'ফলজ বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('tonto-bij', 'তন্তু বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('toil-bij', 'তৈল বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('dana-bij', 'দানা বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('sasso-bij', 'শস্য বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('osodhi-bij', 'ঔষধি বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('bonojo-bij', 'বনজ বীজ') !!}</li>
                            </ul>

                        </li>
                        <li class="has-child">{!! Html::link('#', 'খাদ্য', ['style' => 'font-weight: bold;']) !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('gobadi-poshor-khaddo', 'গবাদি পশুর খাদ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('has-morgir-khaddo', 'হাঁস-মুরগীর খাদ্য') !!}</li>
                                 <li class="submenu-item">{!! Html::link('macher-khaddo', 'মাছের খাদ্য') !!}</li>
                                  <li class="submenu-item">{!! Html::link('posho-pakhir-khaddo', 'পশু-পাখির খাদ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('krishi-khaddo', 'কৃষি খাদ্য') !!}</li>
                               
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
                                <li class="submenu-item">{!! Html::link('#', 'ক্যাকটাস-বনসাই ') !!}</li>
                            </ul>

                        </li>
                        <li class="has-child">{!! Html::link('#', 'অর্গানিক', ['style' => 'font-weight: bold;']) !!}

                            <ul class="submenu" >
                                <li class="submenu-item">{!! Html::link('#', 'অরগানিক ফল-শাক-সবজি') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'অরগানিক ফার্ম') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'অরগানিক খাদ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'অরগানিক শুটকি') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'মধু/মাশরুম/মশলাপাতি') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ভেষজ পণ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'Bio Fertilizers') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'অন্যান্য') !!}</li>
                            </ul>

                        </li>
                        <!-- <li>{!! Html::link('#', 'পুস্তিকা', ['style' => 'font-weight: bold;']) !!}</li> -->
                        <li class="has-child">{!! Html::link('#', 'প্রয়োজন', ['style' => 'font-weight: bold;']) !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('#', 'কাঠুরে') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ফ্যাশন') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ক্রোকারিজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ইলেক্ট্রনিক্স') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'হস্ত শিল্প') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'স্বাস্থ্য প্রডাক্ট') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'কসমেটিকস') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'টেলিকম') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ল্যাব ইকুইপমেন্ট') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'অন্যান্য') !!}</li>
                            </ul>

                        </li>


                    </ul>



                </div> <!-- /#navbar -->



            </div> <!-- /.container -->

        </div> <!-- /.navbar-main -->


    </nav>

</header>