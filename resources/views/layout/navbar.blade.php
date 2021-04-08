<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <ul class="list header_social">
                    <li><a href="https://www.facebook.com/tanganpengharapan2007" rel="noopener noreferrer" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/ytp_indonesia?lang=id" rel="noopener noreferrer" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/tangan_pengharapan/" rel="noopener noreferrer" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/user/tanganpengharapan" rel="noopener noreferrer" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="float-right">
                {{-- <select class="lan_pack">
                    <option value="1">English</option>
                    <option value="1">Bangla</option>
                    <option value="1">Indian</option>
                    <option value="1">Aus</option>
                </select> --}}
                <a class="ac_btn" href="{{ route('donation.view') }}">Donate Now</a>
                <a class="bc_btn" href="https://paypal.me/tanganpengharapanytp?locale.x=id_ID">Donate with PayPal</a>
            </div>
        </div>	
    </div>	
    
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="img/logo.png" style="width:auto; height:50px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item {{Request::segment(1)==''?"active":""}}"><a class="nav-link" href="{{ route('home') }}">Home</a></li> 
                        <li class="nav-item {{Request::segment(1)=='gallery'?"active":""}}"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="nav-item {{Request::segment(1)=='bulletin'?"active":""}}"><a class="nav-link" href="{{ route('bulletin') }}">Bulletin</a></li>
                        <li class="nav-item {{Request::segment(1)=='donation'?"active":""}}"><a class="nav-link" href="{{ route('donation.view') }}">Donation</a></li>
                    </ul>
                </div> 
            </div>
        </nav>
    </div>
</header>
