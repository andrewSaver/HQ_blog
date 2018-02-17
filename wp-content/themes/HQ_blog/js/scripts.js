

// Wait for page to load

    jQuery(window).on('load', function () {
        jQuery('#wait-for-load').fadeOut(50);
    });

    //Header link to index
window.onload = function () {
    document.getElementById('header').onclick = function () {
        window.location = 'https://andysaver.xyz/index.html';
    };
}    

    //Caption fade-in animate.css

    jQuery('figure-caption').addClass('animated fadeInUp');


    // Back-to-top function


jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 1100) {
                jQuery('#back-to-top').fadeIn(200);
            } else {
                jQuery('#back-to-top').fadeOut(200);
            }
        });
        // scroll body to 0px on click
        jQuery('#back-to-top').on('click touch', function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
    });
    
    // Floating email UI

    jQuery(document).ready(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 500) {
                jQuery('#email-box').fadeIn(200);
            } else {
                jQuery('#email-box').fadeOut(200);
            }
        });
    });





