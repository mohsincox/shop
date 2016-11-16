<div class="row">

    <div class="col-md-12">
        <div style="margin-top: -40px;" class="col-md-8">
			<?php
				$output = '';
				foreach($mobiles as $mobile){
					$input = $mobile->number.', ';
					$output = $output.$input;
				}
				$numbers = substr($output, 0, -2);
			?>

            	<h2 style="color: red;"><strong>মুঠোফোন : {{ $numbers }} </strong></h2>

        </div>
        <!-- <div class="col-md-4"> -->
	        <div style="margin-top: -20px;" class="input-group col-md-4">
	            <input id="search-criteria" type="text" class="search-query form-control" placeholder="Search" />
	        </div>
	   <!--  </div> -->    
    </div>
</div>

<div class="row">
	<div class="col-md-8" style="margin-bottom: -60px;">
		<div class="col-md-6">
			<div class="footer-social">
	            <a class="social-icon twitter" href="#" target="_blank"></a>
	            <a class="social-icon dribbble" href="#" target="_blank"></a>
	            <a class="social-icon facebook" href="https://www.facebook.com/%E0%A6%95%E0%A7%83%E0%A6%B7%E0%A6%BF-%E0%A6%B9%E0%A6%BE%E0%A6%9F-krishihat-1537374749856138/" target="_blank"></a>
	            <a class="social-icon google-plus" href="#" target="_blank"></a>
	         </div>
		</div>
		<!-- <div class="col-md-6">
	    	<form class="form-horizontal">
	        	<div class="form-group">
	        		<label class="control-label col-sm-2" for="">Search:</label>
			        <div class="input-group">
			        	<div class="col-sm-10">
			            	<input id="search-criteria" type="text" class="search-query form-control" placeholder="Search" />
			            </div>
			        </div>
			    </div>
			</form>
		</div> -->
	</div>
</div>