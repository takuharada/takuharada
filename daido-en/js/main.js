// COUNTDOWN
$('#countdown').countdown('2018/10/10', function(event) {
  var $this = $(this).html(event.strftime(''
//+ '<li><span>%w</span> weeks</li> '
    + '<li><span>%D</span> days</li> '
    + '<li><span>%H</span> hr</li> '
    + '<li><span>%M</span> min</li> '
    + '<li><span>%S</span> sec</li>'));
});


// initialize and configuration for wow js - animations
wow = new WOW({
    animateClass: 'animated',
    offset: 150,
    mobile: false,
    callback: function(box) {
        //console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
});
wow.init();

// initialize tooltips and popovers
$(function () {
$('[data-toggle="tooltip"]').tooltip();
$('[data-toggle=popover]').popover();
})

// js counters
$('#about-counter').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
    if (visible) {
        $(this).find('.timer').each(function() {
            var $this = $(this);
            $({
                Counter: 0
            }).animate({
                Counter: $this.text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
        $(this).unbind('inview');
    }
});
 
// cart widget toggle
$(function() {
    $("#items-counter").click(function() {
        $("body").toggleClass("cart-widget-open");
    });
    $("#cart-widget-close").click(function() {
        $("body").toggleClass("cart-widget-open");
    });

        $(".cart-widget-close-overlay").click(function() {
        $("body").toggleClass("cart-widget-open");
    });

});

//initialize swipers
//home slider
var swiper = new Swiper('.home-slider', {
    pagination: '.home-pagination',
    paginationClickable: true,
    nextButton: '.home-slider-next',
    prevButton: '.home-slider-prev'
});

//testimonials slider
var swiper = new Swiper('.testimonials-slider', {
    pagination: '.testimonials-pagination',
    paginationClickable: true,
    slidesPerView: 1,
    spaceBetween: 30,
    nextButton: '.testimonials-slider-next',
    prevButton: '.testimonials-slider-prev'
});

// product list
var swiper = new Swiper('.product-list-slider', {
    slidesPerView: 3,
    pagination: '.product-list-pagination',
    paginationClickable: true,
    nextButton: '.product-list-slider-next',
    prevButton: '.product-list-slider-prev',
    spaceBetween: 30,
    breakpoints: {
        1024: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        420: {
            slidesPerView: 1,
            spaceBetween: 10
        }
    }
});

//post slider
var swiper = new Swiper('.post-slider', {
    pagination: '.post-pagination',
    paginationClickable: true,
    nextButton: '.post-slider-next',
    prevButton: '.post-slider-prev',
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
        1024: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
});

// smoth scroll
$(".navbar-nav li a[href^='#']").on('click', function(e) {
   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(this.hash).offset().top
     }, 300, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});

// Google maps configuration
// set your latitude, longitude and address of any point on Google Maps - http://www.gps-coordinates.net/
// Google maps reference - https://developers.google.com/maps/
// You need API key - https://developers.google.com/maps/documentation/javascript/get-api-key
// place your api key in link to script  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
!function() {
  // ピン(マーカー)のデータ
  var myMarkers = [
    {
      position: [39.701861, 141.136291],
      title: '大同苑　盛岡駅フェザン店',
      content: '〒020-0034<br>岩手県盛岡市盛岡駅前通1番44号<br>盛岡駅ビルフェザン　おでんせ館　1F',
      icon: 'http://daido-en.sakura.ne.jp/recruit/wp-content/themes/daido-en/img/icon-location.png' 
    },
    {
      position: [39.702194, 141.144441],
      title: '大同苑　菜園本店',
      content: '〒020-0024<br>盛岡市菜園2-6-19',
      icon: 'http://daido-en.sakura.ne.jp/recruit/wp-content/themes/daido-en/img/icon-location.png' 
    }
  ];

  function initialize() {
    var myLatlng = new google.maps.LatLng(39.702435, 141.139832);

    // Style
var myMapStyle = [{
      featureType: 'all',
      elementType: 'labels.icon',
      stylers: [{visibility: 'on'}]
    }, {
      featureType: 'administrative',
      elementType: 'labels.text.fill',
      stylers: [{color: '#444444'}]
    }, {
      featureType:'landscape',
      elementType: 'all',
      stylers: [{color: '#f2f2f2'}]
    }, {
      featureType:'landscape',
      elementType: 'labels.text.fill',
      stylers: [{color: '#56D0BD'}]
    }, {
      featureType: 'poi',
      elementType: 'all',
      stylers: [{visibility: 'off'}]
    }, {
      featureType: 'road',
      elementType: 'all',
      stylers: [{saturation: -100},{lightness: 45}]
    }, {
      featureType: 'road.highway',
      elementType: 'all',
      stylers: [{visibility: 'simplified'}]
    }, {
      featureType: 'transit',
      elementType: 'all',
      stylers: [{visibility: 'on'}]
    }, {
      featureType: 'water',
      elementType: 'all',
      stylers: [{color: '#cccccc'},{visibility: 'on'}]
    }];



    // Map Options
    var mapOptions = {
      center: myLatlng,
      zoom: 15,
      styles: myMapStyle, // デザインを適応
       disableDefaultUI: true
    };

    // Map
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    // Info Window
    var infowindow;

    // show Information Window Event
    var showInfoWindow = function(markerObj) {
      if(infowindow) {
        infowindow.close();
      }
      var content = '<strong>' + markerObj.getTitle() + '</strong><br />' + markerObj.content;
      infowindow = new google.maps.InfoWindow({
        content: content
      });
      return infowindow.open(map, markerObj);
    };

    // Add markers
    for(var i=0, l=myMarkers.length; i<l; i+=1) {
      var markerData = myMarkers[i],
          marker = new google.maps.Marker({
            position: new google.maps.LatLng( markerData.position[0], markerData.position[1] ),
            title: markerData.title,
            content: markerData.content,
            map: map,
            icon: markerData.icon,
            animation: google.maps.Animation.DROP
          });

          var icon = new google.maps.MarkerImage('img/icon-location.png');

      // addListener
      google.maps.event.addListener(marker, 'click', function() {
        showInfoWindow(this);
      });
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);
}();