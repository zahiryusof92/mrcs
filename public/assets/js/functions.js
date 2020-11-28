(function ($) {

    "use strict";

    /*Aside panel + nav*/
    var $Main_nav = $('.main_nav');
    var $Mc = $('#main_container');
    var $Layer = $('.layer');
    var $Btn_m = $('#menu-button-mobile');
    var $Tabs_c = $('.main_nav .nav-tabs a');

    $Main_nav.on("click", function () {
        $Mc.addClass("show_container")
        $Layer.addClass("layer-is-visible")
    });
    $(".close_in").on("click", function () {
        $Mc.removeClass("show_container")
        $(".main_nav .nav-tabs li a.active").removeClass("active")
        $Layer.removeClass("layer-is-visible")
    });
    $Tabs_c.on('click', function (e) {
        var href = $(this).attr('href');
        $('.wrapper_in').animate({
            scrollTop: $(href).offset().top
        }, 'fast');
        e.preventDefault();
        if ($(window).width() <= 767) {
            $Btn_m.removeClass("active");
            $Main_nav.slideToggle(300);
        }
    });
    $Btn_m.on("click", function () {
        $Main_nav.slideToggle(500);
        $(this).toggleClass("active");
    });

    $(window).on("resize", function () {
        var width = $(window).width();
        if (width <= 767) {
            $Main_nav.hide();
        } else {
            $Main_nav.show();
        }
    });

    /* Scroll to top small screens: chanhe the top position offset based on your content*/
    var $Scrolbt = $('button.backward,button.forward');
    var $Element = $('.wrapper_in');

    if (window.innerWidth < 800) {
        $Scrolbt.on("click", function () {
            $Element.animate({scrollTop: 500}, "slow");
            return false;
        });
    }

    if (window.innerWidth < 600) {
        $Scrolbt.on("click", function () {
            $Element.animate({scrollTop: 610}, "slow");
            return false;
        });
    }

    /* Tooltip*/
    $('.tooltip-1').tooltip({
        html: true
    });

    /* Accordion*/
    function toggleChevron(e) {
        $(e.target)
                .prev('.card-header')
                .find("i.indicator")
                .toggleClass('icon_minus_alt2 icon_plus_alt2');
    }
    $('#accordion').on('hidden.bs.collapse shown.bs.collapse', toggleChevron);
    function toggleIcon(e) {
        $(e.target)
                .prev('.panel-heading')
                .find(".indicator")
                .toggleClass('icon_minus_alt2 icon_plus_alt2');
    }

    /* Video modal*/
    $('.video_modal').magnificPopup({
        type: 'iframe'
    });

    /*  Image popups */
    $('.magnific-gallery').each(function () {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });

    /* Carousel*/
    $('.owl-carousel').owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        autoplay: true,
        autoHeight: true,
        autoplayTimeout: 3500,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /* Check and radio input styles */
    $('input.icheck').iCheck({
        checkboxClass: 'icheckbox_square-yellow',
        radioClass: 'iradio_square-yellow'
    });

})(window.jQuery); // JavaScript Document