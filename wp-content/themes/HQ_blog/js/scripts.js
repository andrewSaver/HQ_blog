

    //Header link to index
window.onload = function () {
    document.getElementById('header').onclick = function () {
        window.location = 'https://thehindquartervt.com/index.html';
    };
}    

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





