<header class="main-header">


    <nav class="navbar navbar-static-top">



        <div class="navbar-main">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" style="margin-top: -14px" href="">{{ HTML::image('assets/images/logo.jpg') }}</a>

                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                    <ul class="nav navbar-nav">


                        <li>{!! Html::link('/', 'হোম ') !!}</li>
                        <li class="has-child">{!! Html::link('#', 'বীজ') !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('sasso-bij', 'শস্য বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('shak-sobji-bij', 'শাকসবজি বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ফুল বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ফলজ বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ঔষধি বীজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'বনজ বীজ') !!}</li>
                            </ul>

                        </li>
                        <li class="has-child">{!! Html::link('#', 'ঔষধ') !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('#', 'গবাদি পশুর ঔষধ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'হাঁস-মুরগীর ঔষধ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'মৎস ঔষধ') !!}</li>
                            </ul>

                        </li>
                        <li>{!! Html::link('#', 'কিটনাশক') !!}</li>
                        <li class="has-child">{!! Html::link('#', 'খাবার/খাদ্য') !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('#', 'গবাদি পশুর খাদ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'হাঁস-মুরগীর খাদ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'কৃষি খাদ্য') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'মৎস খাদ্য') !!}</li>
                            </ul>

                        </li>
                        <li class="has-child">{!! Html::link('#', 'নার্সারী') !!}

                            <ul class="submenu">
                                <li class="submenu-item">{!! Html::link('#', 'ফুল') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ফল') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ঔষধি') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'বনজ') !!}</li>
                                <li class="submenu-item">{!! Html::link('#', 'ক্যাকটাস') !!}</li>
                            </ul>

                        </li>
                        <li>{!! Html::link('#', 'যন্ত্রপাতি') !!}</li>
                        <li>{!! Html::link('#', 'উপকরণ') !!}</li>
                        <li>{!! Html::link('#', 'ঠিকানা/যোগাযোগ  ') !!}</li>


                    </ul>



                </div> <!-- /#navbar -->



            </div> <!-- /.container -->

        </div> <!-- /.navbar-main -->


    </nav>

</header>