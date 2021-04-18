<section class="feature_area p_120">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="white_title">
            @foreach($postteam as $pt)
                <h2>{{$pt->title}}</h2>
                <p>{!! $pt->content !!}</p>
            @endforeach
        </div>
    </div>
</section>
