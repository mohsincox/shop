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
            © 2017 - by Mohsin Iqbal (Mobile: 01758214966)
        </div>
    </div>

</footer>