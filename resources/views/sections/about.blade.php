<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                @foreach($postabout as $pa)
                    <h3>{{$pa->title}}</h3>
                    <p>{!! $pa->content !!}</p>
                @endforeach
                <div class="home owl-carousel">
                    @foreach($about as $a)
                        <div class="item"><img src="{{Session('docs')}}/img/about/{{$a->img}}" alt=""></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>