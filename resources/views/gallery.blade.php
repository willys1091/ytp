

@extends('layout.public')

@section('content')

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Gallery</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Gallery Area =================-->
<section class="gallery_area p_120">
    <div class="container">
        {{-- <div class="row gallery_inner imageGallery1"> --}}
            {{-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-0e4953f4-68a6-46f5-b1dc-fed5e608e089"></div> --}}

            <div class="embedsocial-hashtag" data-ref="9fae75f9e5b7d58f36c4dd01f144fcc26a7beda3" ></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialHashtagScript"));</script>

        {{-- </div> --}}
        </div>
</section>
<!--================End Gallery Area =================-->

@endsection