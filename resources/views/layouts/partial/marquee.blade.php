<h2 class="title-style-1" style="margin-top: -30px;">শিগ্রই আসিতেছে (Coming Soon)<span class="title-under"></span></h2>
<div>
	<marquee behavior="scroll" direction="left" scrollamount="10">
		@foreach($marquees as $marquee)
			{{ Html::image('uploads/'.$marquee->image, null, ['width' => 150, 'height' => 100]) }}
		@endforeach
	</marquee>
</div>