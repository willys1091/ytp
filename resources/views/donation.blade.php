@extends('layout.public')
@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container"><div class="banner_content text-center"><h2>Donation</h2></div></div>
    </div>
</section>
<section class="donation_f_area p_120">
    <div class="container">
        <div class="row donation_f_inner">
            <div class="col-lg-7">
                <div class="dn_left_text">
                    <div class="dn_item">
                        <h4>You can become our partners or foster parents to support children in need.</h4>
                        <h4>Every donation given will be collected with the other donations from the other partners, then they will be distributed to YTP Centers in Indonesia.</h4>
                        <h4>Tangan Pengharapan distributes your donation either in money or in kind to all YTP Centers in Indonesia.</h4>
                        <h4>The usage of money and stuffs will be checked by Tangan Pengharapan Main Office’s accountants every month in order to make sure that they are properly used.</h4>
                        <h4>Every month you will get a testimony video regarding the children joined in the YTP Centers. In addition, you will get our monthly bulletin reporting on children progress in the YTP Centers.</h4>
                        <h5>Account Name : Yayasan Tangan Pengharapan</h5>
                        <h5>BCA : 0653090096 – Kelapa Gading (Swift Code : CENAIDJA)</h5>
                        <h5>BNI : 0309009606 – Kelapa Gading (Swift Code : BNINIDJAXXX)</h5>
                        <h5>Mandiri : 1250011260924 – Kelapa Gading (Swift Code : BMRIIDJA)</h5>
                        <h5>BRI : 0540 01 000397 308</h5>
                        <h5>COMMONWEALTH BANK OF AUSTRALIA : 062-401 1034 0658 (A.N House of Blessing Australia Inc)</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="dn_form_area">
                    <form class="donation_form row" action="#" method="post" id="contactForm" novalidate="novalidate">
                        <div class="form-group col-lg-12">
                            <img src="{{url('img/donation-ytp.jpg')}}" class="img-fluid" alt="Donation">
                            <img src="{{url('img/visa.png')}}" class="img-fluid" alt="Visa" width="100px"><img src="{{url('img/mastercard.png')}}" class="img-fluid" alt="mastercard" width="100px">
                        </div>
                        <div class="form-group col-lg-12">
                            <select name="charity_category_id" class="donate_select">
                                @foreach($categories as $category)
                                    @if ($loop->first)
                                        <option value="{{ $category->id }}" data-hidden="true">{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                                <option value="impactcommunityindonesia">Impact Community Indonesia</option>
                                <option value="pedulisesama">Peduli Sesama</option>
                            </select>
                        </div>
                    
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="name" name="full_name" placeholder="Name" autocomplete="off">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" autocomplete="off">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="number" class="form-control" id="amount" name="donation_amount" placeholder="Donation Amount Min IDR 10.000" min="10000" autocomplete="off" value=10000>

                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn paypal_btn form-control"><a href="https://paypal.me/tanganpengharapanytp?locale.x=id_ID">DONATION WITH PAYPAL</a></button>
                            <button class="btn submit_btn form-control">Donate Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Denation Area =================-->

@endsection

@section('script')
    @if(config('midtrans.is_production'))
        <script type="text/javascript"
                src="https://app.midtrans.com/snap/snap.js"
                data-client-key="{{ config('midtrans.client_key') }}"></script>
    @else
        <script type="text/javascript"
                src="https://app.sandbox.midtrans.com/snap/snap.js"
                data-client-key="{{ config('midtrans.client_key') }}"></script>
    @endif

    <script>
        jQuery(document).ready( function($) {

            onDonateClick();
        
            // Disable scroll when focused on a number input.
            $('form').on('focus', 'input[type=number]', function(e) {
                $(this).on('wheel', function(e) {
                    e.preventDefault();
                });
            });
        
            // Restore scroll on number inputs.
            $('form').on('blur', 'input[type=number]', function(e) {
                $(this).off('wheel');
            });
        
            // Disable up and down keys.
            $('form').on('keydown', 'input[type=number]', function(e) {
                if ( e.which == 38 || e.which == 40 )
                    e.preventDefault();
            });  
            
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function onDonateClick()
        {
            $('#contactForm').on('submit', function(e){
                e.preventDefault();

                let data = {};
                let arrForm = $(this).serializeArray();

                $(arrForm).each(function(index, obj){
                    data[obj.name] = obj.value;
                })
                
                data._token = "{{ csrf_token() }}";

                $.ajax({
                    method: "POST",
                    url: "{{ route('get_token') }}",
                    data: data,
                    success: function(response) {
                        if(response.status == 200){
                            showSnapMidtrans(response.data.token);
                        }
                    }
                });
            });
        }

        function showSnapMidtrans(token)
        {
            snap.pay(token);
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
    </script>
@endsection