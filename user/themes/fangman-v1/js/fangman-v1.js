/* =========================================================

Menu Toggle

========================================================= */

$(function() {                       
  $(".menu-toggle").click(function() { 
    $('#site-menu').toggleClass("site-menu-open");   
    $('.menu-toggle').toggleClass("site-menu-open");      
  });
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
        }, 1000);
        return false;
      }
    }
  });
});

/* =========================================================

Project Desktop Slider - Slick Slider

// ========================================================= */
 $(document).ready(function(){
    $(".project-ds-slider").slick({
      dots: true,
      arrows: true,
      speed: 500,
      rows: 1
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
    // fixedContentPos: true,
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
