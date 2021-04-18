<section class="testimonials_area p_120">
    <div class="container">
        <div class="row testimonials_inner">
            <div class="col-lg-4">
                <div class="testi_left_text no-margin-top">
                    @foreach($postmerchant as $pm)
                        <h4>{{$pm->title}}</h4>
                        <p>{!! $pm->content !!}</p>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8">          
                <div class="embedsocial-hashtag" data-ref="a86767258de340fc46d9ddb3979dcaf1a3d25f50" ></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialHashtagScript"));</script>
                {{-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
                <iframe src="//lightwidget.com/widgets/7525c4a4ec9958829743374324009c82.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe> --}}
            </div>
        </div>
        <div class="row">
            <div class="img-positive col-lg-4 col-md-4 col-sm-4"><img src="/img/m1.png" alt=""></div>
            <div class="img-positive col-lg-4 col-md-4 col-sm-4"><img src="/img/lg-pstv.png" alt=""></div>
            <div class="img-positive col-lg-4 col-md-4 col-sm-4"><img src="/img/lg-btk.png" alt=""></div>
        </div>
    </div>
</section>
