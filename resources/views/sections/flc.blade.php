<section class="feature_area p_120">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
		<div class="row testimonials_inner">
			<div class="col-lg-6">
				<div class="testi_left_text_events no-margin-top putih">
					@foreach($postflc as $pf)
						<h3>{{$pf->title}}</h3>
						<p>{!! $pf->content !!}</p>
					@endforeach
					
				</div>
			</div>
			<div class="col-lg-6">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						@php $x = 1 @endphp
						@foreach($flc as $f)
							<div class="carousel-item {{$x=='1'?'active':''}}"><img src="{{Session('docs')}}/img/flc/{{$f->img}}" alt="" class="d-block w-100"></div>
							@php $x++ @endphp
						@endforeach
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="fa fa-chevron-left fa-2x" style="color: #fff;" aria-hidden="true"></span><span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="fa fa-chevron-right fa-2x" style="color: #fff;" aria-hidden="true"></span><span class="sr-only">Next</span>
					</a>
			  	</div>
			</div>
		</div>
	</div>
</section>
