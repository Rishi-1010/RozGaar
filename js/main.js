(function ($) {
"use strict";
// TOP Menu Sticky
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 400) {
    $("#sticky-header").removeClass("sticky");
    $('#back-top').fadeIn(500);
	} else {
    $("#sticky-header").addClass("sticky");
    $('#back-top').fadeIn(500);
	}
});

$(document).ready(function(){
    // Only initialize slicknav if the plugin exists
    if($.fn.slicknav) {
        var menu = $('ul#navigation');
        if(menu.length){
            menu.slicknav({
                prependTo: ".mobile_menu",
                closedSymbol: '+',
                openedSymbol:'-'
            });
        }
    }

    // Only initialize nice select if the plugin exists
    if($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // Only initialize counterUp if the plugin exists
    if($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 10000
        });
    }

    // Only initialize magnificPopup if the plugin exists
    if($.fn.magnificPopup) {
        $('.popup-image').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        $('.img-pop-up').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        $('.popup-video').magnificPopup({
            type: 'iframe'
        });
    }

    // Search Toggle functionality
    $("#search_input_box").hide();
    $("#search").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });
    $("#close_search").on("click", function () {
        $('#search_input_box').slideUp(500);
    });
    $("#search_1").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });
});

})(jQuery);	