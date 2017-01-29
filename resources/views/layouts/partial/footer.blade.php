<footer class="main-footer">

    <!-- <div class="footer-top">

    </div> -->


    <div class="footer-main">
        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <div class="footer-col">

                        <h3 class="footer-title">
                            ঠিকানা/যোগাযোগ   <span class="title-under"></span></h3>

                        <div class="footer-content">
                            @foreach($thikanas as $address)
                                <ul class="tweets list-unstyled">
                                    <li class="tweet">
                                        <a><h4>{{ $address->office }}</h4></a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="footer-col">

                        <h3 class="footer-title">আমাদের সম্পর্কে<span class="title-under"></span></h3>

                        <div class="footer-content">

                            <p>
                                বাংলাদেশ (এই শব্দ সম্পর্কে শুনুন (সাহায্য·তথ্য)) দক্ষিণ এশিয়ার একটি জনবহুল রাষ্ট্র। বাংলাদেশের সাংবিধানিক নাম গণপ্রজাতন্ত্রী বাংলাদেশ।
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="footer-col">

                        <h3 class="footer-title">নোটিশ বোর্ড <span class="title-under"></span></h3>

                        <div class="footer-content">

                            @foreach($notices as $notice)
                                <ul class="tweets list-unstyled">
                                    <li class="tweet">
                                        <a><h4>{{ $notice->title }}</h4></a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>

                    </div>

                </div>

                <style type="text/css">
                    /* social icons */
.social-icon {
    display: inline-block;
    width: 48px;
    height: 48px;
    margin: 5px;
    background: center center no-repeat;
}

.social-icon.facebook { background-image: url(assets/images/social-icons/facebook.png); }
.social-icon.twitter { background-image: url(assets/images/social-icons/twitter.png); }
.social-icon.dribbble { background-image: url(assets/images/social-icons/youtube.png); }
.social-icon.google-plus { background-image: url(assets/images/social-icons/google-plus.png); }
                </style>
                
                <div class="col-md-3">

                    <div class="footer-col">

                        <h3 class="footer-title">ব্যাংক একাউন্ট<span class="title-under"></span></h3>

                        <div class="footer-content">
                            @foreach($thikanas as $address)
                                <ul class="tweets list-unstyled">
                                    <li class="tweet">
                                        <a><h4>{{ $address->account_no }}</h4></a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>

                    </div>

                </div>
                <div class="clearfix"></div>



            </div>


        </div>


    </div>

    <div class="footer-bottom">

        <div class="container text-right">
            Mohsin @ copyrights 2016 - by Mohsin Iqbal
        </div>
    </div>

</footer>