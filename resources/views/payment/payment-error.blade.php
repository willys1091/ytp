@extends('layout.public')
@section('title', "Payment - ORDERAJA")
@section('content')

<!--================Feature Area =================-->
<section class="payment_area p_120">
  {{-- <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div> --}}
  <div class="container">
      <div class="black_title">
          <h2>Payment Error</h2>
          <p>
            Terjadi kesalahan dalam proses transaksi.
            <br>
            Silahkan cek dan mencoba kembali dan jika masih terjadi kesalahan,
            <br>
            bisa menghubungi Call Center kami :
            <br>
            <a href="callto:62214528511">(+6221) 452 8511</a>
            <a href="https://api.whatsapp.com/send?phone=6281314333341" rel="noopener noreferrer" target="_blank">(+62) 813 143 333 41</a> 
          </p>
      </div>
      {{-- <div class="row feature_inner">
          <div class="col-lg-4">
              <div class="feature_item">
                <img class="img-fluid img-program" src="/img/program/rt.jpg" alt="">
              </div>
          </div>
          <div class="col-lg-4">
              <div class="feature_item">
                <img class="img-fluid img-program" src="/img/program/rt.jpg" alt="">
              </div>
          </div>
          <div class="col-lg-4">
              <div class="feature_item">
                <img class="img-fluid img-program" src="/img/program/rt.jpg" alt="">
              </div>
          </div>
      </div> --}}
  </div>
</section>

@endsection
