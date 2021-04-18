<section class="welcome_area p_120">
    <div class="container">
        <div class="row welcome_inner">
            <div class="col-lg-6">
                <div class="welcome_text">
                    @foreach($postproject as $pp)
						<h4>{{$pp->title}}</h4>
						<p>{!! $pp->content !!}</p>
					@endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="welcome_img">
                    <img class="img-fluid" src="/img/project/pj1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
