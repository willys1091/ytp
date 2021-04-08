<section class="gray-bg section-padding" id="feature-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center"><div class="page-title"><h2>OUR FEED</h2></div></div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 9; $i++)
              {{-- <li class="col-sm-3" style="list-style:none; padding: 1px;"> 
                <a href="{{ $feeds[$i]->link }}" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $feeds[$i]->images->standard_resolution->url }}" alt="" style="width: 290px; height: 290px; object-fit: cover;"> 
                </a>
              </li> --}}
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon box-ig">
                            <a href="{{ $feeds[$i]->link }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ $feeds[$i]->images->standard_resolution->url }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
            {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="box">
                    <div class="box-icon">
                        <img src="/images/portfolio-icon-1.png" alt="">
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>
