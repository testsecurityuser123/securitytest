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

========================================================= */
// Smooth Scroll
jQuery(function() {
    jQuery('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: target.offset().top
                }, 800);
                return true;
            }
        }
    });
});

// Cancel Scroll: Detect the user's attempt to scroll or interact with the page and then cancel any scroll animation that might be going on
$viewport = jQuery('body,html'); //use both body and html as firefox places overflow at the html level, and hence scrolls here
$viewport.bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(e) {
    if (e.which > 0 || e.type === "mousedown" || e.type === "mousewheel") {
        $viewport.stop();
    }
});
