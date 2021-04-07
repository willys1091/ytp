<section class="causes_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Our Program</h2>
            {{-- <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence, and upturning of the natural chain of events that resounded.</p> --}}
        </div>
        <div class="causes_slider owl-carousel">
            @foreach($program as $p)
                <div class="item">
                    <div class="causes_item">
                        <div class="causes_img"><img class="img-fluid img-program" src="{{Session('docs')}}/img/program/{{$p->img}}" alt=""></div>
                        <div class="causes_text">
                            <h4>{{$p->title}}</h4>
                            <p>{{$p->desc}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
