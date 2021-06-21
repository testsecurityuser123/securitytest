
$(function() {
from DataFlow::PathNode source, DataFlow::PathNode sink, UnsafeDeserializationConfig conf

        where conf.hasFlowPath(source, sink)

        select sink.getNode().(UnsafeDeserializationSink).getMethodAccess(), source, sink,
    "Unsafe deserialization of $@.", source.getNode(), "user input"

 Statement stmt = conn.createStatement();
 ResultSet rs = stmt.executeQuery("select * from emp where id="+eid);
 if (rs != null) {
  rs.next();
  String name = rs.getString("name");
});


/* =========================================================

Page Loader

========================================================= */

$(window).load(function() {
  $("#preloader").fadeOut(750);
});

/* =========================================================

Logo / Back Icon Swap -- Adding Class to Homepage

========================================================= */

$(function() {
  var loc = window.location.href; // returns the full URL
  if(/login/.test(loc)) {
    $('#site-navigation').addClass('hidden');
    $('#body').addClass('login-container');
  }
});


$(function() {
  var loc = window.location.href; // returns the full URL
  if(/#/.test(loc)) {
    $('.site-nav-logo > a').removeClass('link');
    $('.site-nav-menu-container a').removeClass('link');
  }
});


/* =========================================================

Page Fade Out

========================================================= */

$(document).ready(function() {
    $('.link').click(function() {
        event.preventDefault();
        newLocation = this.href;
        $('body').fadeOut(1000, newpage);
    });

    function newpage() {
        window.location = newLocation;
    }
});


/* =========================================================

Smooth Scroll

// ========================================================= */
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});

/* =========================================================

Menu Toggle

========================================================= */

$(function() {
  $(".menu-toggle").click(function() {
    $('.site-nav-menu-container').toggleClass("site-menu-open");
    $('.menu-toggle').toggleClass("site-menu-open");

    $('.site-nav-menu-container a').click(function() {
        $('.site-nav-menu-container').removeClass("site-menu-open");
        $('.menu-toggle').removeClass("site-menu-open");
    });

  });
});


// remove toggle class on screens above 480px
$(function($) {
    var $window = $(window),
        $html = $('html');

    $window.resize(function resize(){
        if ($window.width() < 480) {
           $('.site-nav-menu-container').removeClass('site-menu-open');
            $('.menu-toggle').removeClass('site-menu-open');
        }

        //$html.removeClass('mobile');
    }).trigger('resize');
});

/* =========================================================

Project Desktop Slider - Slick Slider

// ========================================================= */
 $(document).ready(function(){
    $(".project-ds-slider").slick({
      dots: true,
      arrows: true,
      speed: 500,
      rows: 1,
      infinite: false
    });
});


/* =========================================================

Project Phone Slider - Slick Slider

// ========================================================= */
 $(document).ready(function(){
    $(".project-ps-slider").slick({
      dots: true,
      arrows: true,
      speed: 500,
      rows: 1,
      infinite: false
    });
});

/* =========================================================

Project Desktop Slider - Image Modal

// ========================================================= */

// $(document).ready(function() {
//   $('.image-link').magnificPopup({type:'image'});
// });
$(document).ready(function() {
  $('.project-ds-slider').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    closeOnContentClick: true,
    closeOnBgClick: true,
    // modal: true,
    fixedContentPos: true,
    removalDelay: 300,
    verticalFit: false,
    mainClass: 'ds-modal-animation',
    showCloseBtn: false,
    gallery: {
      enabled: true,
      tCounter: '<span class="mf-count">%curr% of %total%<span>'
    },
  });
});

/* =========================================================

Project Phone Slider - Image Modal

// ========================================================= */


$(document).ready(function() {
  $('.project-ps-slider').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    closeOnContentClick: true,
    closeOnBgClick: true,
    // modal: true,
    fixedContentPos: true,
    removalDelay: 300,
    verticalFit: false,
    mainClass: 'ds-modal-animation',
    showCloseBtn: false,
    gallery: {
      enabled: true,
      tCounter: '<span class="mf-count">%curr% of %total%<span>'
    },
  });
});

/* =========================================================

Project Requirements Slider - Slick Slider

// ========================================================= */
 $(document).ready(function(){
    $(".project-cs-right-slider").slick({
      vertical: true,
      verticalSwiping: true,
      centerMode: true,
      dots: false,
      arrows: true,
      speed: 500,
      rows: 3,
      slidesPerRow: 1,
      slidesToScroll: 1,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 5000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            rows: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            rows: 2
          }
        }
      ]
    });
});


/* =========================================================

Disable Right Click Menu on Images

// ========================================================= */

$(document).ready(function(){
  // this part disables the right click
  $('img').on('contextmenu', function(e) {
      return false;
  });

  //this part disables dragging of image
  $('img').on('dragstart', function(e) {
      return false;
  });

});



// jQuery(".home-hero-content h1").fitText(1.2, { minFontSize: '20px', maxFontSize: '40px' });
