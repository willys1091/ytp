;(function($){
    "use strict"
	
	
	var nav_offset_top = $('header').height(); 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.header_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
	
	
	/*----------------------------------------------------*/
    /*  Parallax Effect js
    /*----------------------------------------------------*/
	function parallaxEffect() {
    	$('.bg-parallax').parallax();
	}
	parallaxEffect();
	
	
	/*----------------------------------------------------*/
    /*  Causes Slider
    /*----------------------------------------------------*/
    function causes_slider(){
        if ( $('.causes_slider').length ){
            $('.causes_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 3,
                nav: false,
                autoplay: true,
                smartSpeed: 2000,
                dots:false, 
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    }
                }
            })
        }
    }
    causes_slider();
	
	/*----------------------------------------------------*/
    /*  Event Slider
    /*----------------------------------------------------*/
    function event_slider(){
        if ( $('.event_slider').length ){
            $('.event_slider').owlCarousel({
                loop:true,
                margin: 45,
                items: 2,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                dots:true, 
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
						margin: 20,
                    },
                    992: {
                        margin: 20,
						items: 2,
                    },
                    1199: {
                        margin: 45,
						items: 2,
                    }
                }
            })
        }
    }
    event_slider();
	
	/*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function testi_slider(){
        if ( $('.testi_slider').length ){
            $('.testi_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 2,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                dots:true, 
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    576: {
                        items: 2,
                    }
                }
            })
        }
    }
    testi_slider();

    /*----------------------------------------------------*/
    /*  Events Slider
    /*----------------------------------------------------*/
    function event_slider(){
        if ( $('.event_slider').length ){
            $('.event_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 1,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                dots:true, 
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    576: {
                        items: 1,
                    }
                }
            })
        }
    }
    event_slider();
	
	/*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function clients_slider(){
        if ( $('.clients_slider').length ){
            $('.clients_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 5,
                nav: false,
                autoplay: true,
                smartSpeed: 1000,
                dots:false, 
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 2,
                    },
                    575: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                    992: {
                        items: 5,
                    }
                }
            })
        }
    }
    clients_slider();

    function home(){
        if ( $('.home').length ){
            $('.home').owlCarousel({
                loop:true,
                margin: 30,
                items: 3,
                nav: true,
                autoplay: true,
                smartSpeed: 1500,
                dots: false, 
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 2,
                    },
                    575: {
                        items: 3,
                    },
                    768: {
                        items: 3,
                    },
                    992: {
                        items: 3,
                    }
                }
            })
        }
        $( ".owl-prev").html('<i class="fa fa-arrow-left"></i>');
        $( ".owl-next").html('<i class="fa fa-arrow-right"></i>');
    }
    home();
	
	/*----------------------------------------------------*/
    /*  MailChimp Slider
    /*----------------------------------------------------*/
    function mailChimp(){
        $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();
	
	$('select').niceSelect();
	
	/*----------------------------------------------------*/
    /*  Simple LightBox js
    /*----------------------------------------------------*/
    $('.imageGallery1 .light').simpleLightbox();
	
	
	/*----------------------------------------------------*/
    /*  Image Gallery js
    /*----------------------------------------------------*/
    function galleryMasonry(){
        if ( $('.gallery_inner').length ){
            $('.gallery_inner').imagesLoaded( function() {
              // images have loaded
                // Activate isotope in container
                $(".gallery_inner").isotope({
                    itemSelector: ".gallery_item",
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
            })
        }
    }
    galleryMasonry();
	
	/*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
    
    // if ( $('#mapBox').length ){
    //     var $lat = $('#mapBox').data('lat');
    //     var $lon = $('#mapBox').data('lon');
    //     var $zoom = $('#mapBox').data('zoom');
    //     var $marker = $('#mapBox').data('marker');
    //     var $info = $('#mapBox').data('info');
    //     var $markerLat = $('#mapBox').data('mlat');
    //     var $markerLon = $('#mapBox').data('mlon');
    //     var map = new GMaps({
    //     el: '#mapBox',
    //     lat: $lat,
    //     lng: $lon,
    //     scrollwheel: false,
    //     scaleControl: true,
    //     streetViewControl: false,
    //     panControl: true,
    //     disableDoubleClickZoom: true,
    //     mapTypeControl: false,
    //     zoom: $zoom,
    //         styles: [
    //             {
    //                 "featureType": "water",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     {
    //                         "color": "#dcdfe6"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "transit",
    //                 "stylers": [
    //                     {
    //                         "color": "#808080"
    //                     },
    //                     {
    //                         "visibility": "off"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road.highway",
    //                 "elementType": "geometry.stroke",
    //                 "stylers": [
    //                     {
    //                         "visibility": "on"
    //                     },
    //                     {
    //                         "color": "#dcdfe6"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road.highway",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     {
    //                         "color": "#ffffff"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road.local",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     {
    //                         "visibility": "on"
    //                     },
    //                     {
    //                         "color": "#ffffff"
    //                     },
    //                     {
    //                         "weight": 1.8
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road.local",
    //                 "elementType": "geometry.stroke",
    //                 "stylers": [
    //                     {
    //                         "color": "#d7d7d7"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "poi",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     {
    //                         "visibility": "on"
    //                     },
    //                     {
    //                         "color": "#ebebeb"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "administrative",
    //                 "elementType": "geometry",
    //                 "stylers": [
    //                     {
    //                         "color": "#a7a7a7"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road.arterial",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     {
    //                         "color": "#ffffff"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road.arterial",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     {
    //                         "color": "#ffffff"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "landscape",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     {
    //                         "visibility": "on"
    //                     },
    //                     {
    //                         "color": "#efefef"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road",
    //                 "elementType": "labels.text.fill",
    //                 "stylers": [
    //                     {
    //                         "color": "#696969"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "administrative",
    //                 "elementType": "labels.text.fill",
    //                 "stylers": [
    //                     {
    //                         "visibility": "on"
    //                     },
    //                     {
    //                         "color": "#737373"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "poi",
    //                 "elementType": "labels.icon",
    //                 "stylers": [
    //                     {
    //                         "visibility": "off"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "poi",
    //                 "elementType": "labels",
    //                 "stylers": [
    //                     {
    //                         "visibility": "off"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road.arterial",
    //                 "elementType": "geometry.stroke",
    //                 "stylers": [
    //                     {
    //                         "color": "#d6d6d6"
    //                     }
    //                 ]
    //             },
    //             {
    //                 "featureType": "road",
    //                 "elementType": "labels.icon",
    //                 "stylers": [
    //                     {
    //                         "visibility": "off"
    //                     }
    //                 ]
    //             },
    //             {},
    //             {
    //                 "featureType": "poi",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     {
    //                         "color": "#dadada"
    //                     }
    //                 ]
    //             }
    //         ]
    //     });
    // }

    $(document).ready(function(){
        var locations = [
            ['Siberut, Mentawai', -1.406109, 99.074478, 4],
            ['Jakarta', -6.171536, 106.907037, 5],
            ['Purwodadi, Jawa Tengah', -7.099700, 110.932531, 3],
            ['Sumba Timur', -9.735179, 120.181679, 2],
            ['Nusa Tenggara Timur', -9.603458,124.498215, 1],
            ['Halmahera, Maluku Utara', 0.856902, 128.208618, 6],
            ['Serui, Papua', -1.735574, 136.008911, 7],
            ['Kalimantan Barat (Desa Kampet)', -0.087891, 111.531372, 8],
            ['Kalimantan Barat (Desa Baban)', 0.823353, 109.277094, 9],
            ['Merauke, Papua', -8.483286, 140.551879, 10],
            ['Asmat, Papua', -5.061708, 138.107197, 11],
            ['Agats', -5.061708, 138.107197, 12],
            ['Sumba Barat', -9.649409, 119.395053, 13],
            ['Sumba Barat Daya', -9.533714, 119.138374, 14],
            ['Nabire', -3.506566, 135.751647, 15],
            ['Sulawesi Utara', 1.043166, 124.824562, 16],
            ['Amamapare, Papua', -4.827336, 136.907471, 17],
            ['Dusun Pelaik Kemayo', 109.906921, 1.092334, 18]
          ];
      
          var map = new google.maps.Map(document.getElementById('mapBox'), {
            zoom: 5,
            center: new google.maps.LatLng(-2.54893, 118.01486),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
      
          var infowindow = new google.maps.InfoWindow();
      
          var marker, i;
    
          console.log(i);
      
          for (i = 0; i < locations.length; i++) {  
            marker = new google.maps.Marker({
              position: new google.maps.LatLng(locations[i][1], locations[i][2]),
              map: map
            });
      
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
              }
            })(marker, i));
          }
    
    });

})(jQuery)