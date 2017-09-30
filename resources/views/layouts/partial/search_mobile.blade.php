<div class="row">

    <div class="col-md-12">
        <div style="margin-top: -40px;" class="col-md-4">
			<?php
				$output = '';
				foreach($mobiles as $mobile){
					$input = $mobile->number.', ';
					$output = $output.$input;
				}
				$numbers = substr($output, 0, -2);
			?>

            	<h2 style="color: red;"><strong>তথ্য, মতামত এবং পরামর্শ :<br> {{ $numbers }} </strong></h2>

        </div>
        <div style="margin-top: -40px;" class="col-md-4">
        	<h3 style="color: green; margin-left: 85px;">সামাজিক যোগাযোগ :</h3>
			<div class="footer-social" style="margin-left: 140px; margin-top: -15px;">
				<a class="social-icon facebook" href="https://www.facebook.com/%E0%A6%95%E0%A7%83%E0%A6%B7%E0%A6%BF-%E0%A6%B9%E0%A6%BE%E0%A6%9F-krishihat-1537374749856138/" target="_blank"></a>
	  
	            <!-- <a class="social-icon twitter" href="#" target="_blank"></a>
	            <a class="social-icon google-plus" href="#" target="_blank"></a>
	            <a class="social-icon dribbble" href="#" target="_blank"></a> -->
	         </div>
		</div>
        <div style="margin-top: -40px;" class="col-md-4">
			<?php
				$output = '';
				foreach($mobileBankings as $mobileBanking){
					$input = $mobileBanking->number.', ';
					$output = $output.$input;
				}
				$numbers = substr($output, 0, -2);
			?>

            	<h2 style="color: red;" class=""><strong>মোবাইল ব্যাংকিং :<br> {{ $numbers }} </strong></h2>

        </div>
    </div>
</div>
<div class="row">
	<div class="col-md-3">
	{{ Html::link('#', 'মূল্য যাচাই (ভিডিওসহ )', ['class' => 'btn btn-primary', 'style' => 'margin-top: 0px; font-weight: bold;']) }}
	</div>
	<div class="col-md-3">
	{{ Html::link('#', 'কোয়ালিটি যাচাই (ভিডিওসহ )', ['class' => 'btn btn-primary', 'style' => 'margin-top: 0px; font-weight: bold;']) }}
	</div>
	<div class="col-md-3">
	{{ Html::link('#', 'রিভিও মন্তব্য (লিখিত)', ['class' => 'btn btn-primary', 'style' => 'margin-top: 0px; font-weight: bold;']) }}
	</div>
	<!-- <div class="col-md-4"> -->
	<div style="margin-top: 0px;" class="input-group col-md-3">
	    <input id="search-criteria" type="text" class="search-query form-control" placeholder="Search" />
	</div>
	<!-- </div>     -->
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

<!-- <div class="row">
	<div class="col-md-8" style="margin-bottom: -60px;">
		<div class="col-md-6">
			<div class="footer-social">
				<a class="social-icon facebook" href="https://www.facebook.com/%E0%A6%95%E0%A7%83%E0%A6%B7%E0%A6%BF-%E0%A6%B9%E0%A6%BE%E0%A6%9F-krishihat-1537374749856138/" target="_blank"></a>
	  
	            <a class="social-icon twitter" href="#" target="_blank"></a>
	            <a class="social-icon google-plus" href="#" target="_blank"></a>
	            <a class="social-icon dribbble" href="#" target="_blank"></a>
	         </div>
		</div>
	</div>
</div> -->