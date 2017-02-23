<footer class="main-footer">

    <!-- <div class="footer-top">

    </div> -->


    <div class="footer-main">
        <div class="container">

            <div class="row">

                <div class="col-md-4">

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

                <!-- <div class="col-md-3">

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

                </div> -->

                
                <div class="col-md-4">

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


                <div class="col-md-4">

                        <div class="footer-col">

                            <h3 class="footer-title">আপনার মতামত <span class="title-under"></span></h3>

                            <div class="footer-content">

                                <div class="footer-form">
                                    
                                    <div class="footer-form" >
                                    
                                    <form action="notice-auth" method="post">

                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                        <div class="form-group">
                                            <input type="text" style="background: #008000;" name="title" class="form-control" placeholder="নাম " autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" style="background: #008000;" name="mobile" class="form-control" placeholder="মোবাইল / ইমেইল " autocomplete="off" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="text" style="background: #008000;" name="address" class="form-control" placeholder="ঠিকানা " autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea style="background: #008000;" name="description" class="form-control" placeholder="মন্তব্য " autocomplete="off" required></textarea>
                                        </div>

                                        <div class="form-group alerts">
                        
                                            <div class="alert alert-success" role="alert">
                                              
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                              
                                            </div>
                                            
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" style="background: #008000;" onMouseOver="this.style.background='#fff'" onMouseOut="this.style.background='#008000'" class="btn btn-submit pull-right">পাঠিয়ে দিন</button>
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
            © 2017 - by Mohsin Iqbal (Mobile: 01758214966)
        </div>
    </div>

</footer>