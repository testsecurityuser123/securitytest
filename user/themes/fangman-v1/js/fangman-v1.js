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


/* =========================================================

Scroll Magic

// ========================================================= */


// init controller
var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
  triggerElement: '#work-anchor', // starting scene, when reaching this element
  offset: 100, // start scene after scrolling for 100px
  duration: 400 // pin the element for 400px of scrolling
})

.setPin('.home-work-feed'); // the element we want to pin

controller.addScene(scene);

// // create a scene
// new ScrollMagic.Scene({
//         triggerElement: '#work-anchor', // starting scene, when reaching this element
//         duration: 100,  // the scene should last for a scroll distance of 100px
//         offset: 50      // start this scene after scrolling for 50px
//     })
//     .setPin(".home-hero-content") // pins the element for the the scene's duration
//     .addTo(controller); // assign the scene to the controller
