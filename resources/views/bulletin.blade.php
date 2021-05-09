@extends('layout.public')
@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container"><div class="banner_content text-center"><h2>Betterlife</h2></div></div>
    </div>
</section>
<section class="gallery_area p_120">
    <div class="container">
        <div class="row gallery_inner imageGallery1">
             @foreach($bulletin as $b)
                <div class="col-md-4 col-sm-6 gallery_item">
                    <div class="gallery_img">
                        <img src="{{Session('docs')}}/img/buletin/{{$b->img}}" alt="">
                        <div class="hover"><a target="_blank" href="{{Session('docs')}}/doc/buletin/{{$b->file}}"><i class="fa fa-link"></i></a></div>
                    </div>
                </div>
             @endforeach
        </div>
    </div>
</section>
@endsection
