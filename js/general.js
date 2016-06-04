'use strict';

$(document).ready(function() {

    var affix_top = $(window).height() * .7;

    /*-----------------------------------------------------------------
     * Parallax
     *-----------------------------------------------------------------*/

    $.stellar({
        responsive: true,
        horizontalOffset: 0,
        verticalOffset: 0,
        horizontalScrolling: false,
        hideDistantElements: false
    });


    /*-----------------------------------------------------------------
     * ScrollSpy
     *-----------------------------------------------------------------*/

    $('body').scrollspy({
        offset:  51
    });

    /*-----------------------------------------------------------------
     * Affixed Navbar
     *-----------------------------------------------------------------*/

    $('#navigation').affix({
        offset: {
            top: affix_top
        }
    });

    /*-----------------------------------------------------------------
     * Scroll To Top
     *-----------------------------------------------------------------*/

    $(window).scroll(function () {

        var $scroll_top = $(this).scrollTop(),
            $scroll_to_top = $('#scroll-to-top');

        if ($scroll_top > affix_top) {
            $scroll_to_top.fadeIn();
        } else {
            $scroll_to_top.fadeOut();
        }
    });
    /*-----------------------------------------------------------------
     * Smooth Scrolling
     *-----------------------------------------------------------------*/

    $('a[href^="#"]').click(function(event) {

        event.preventDefault();

        var target = $(this).attr('href');
        if (target == '#') return;

        $('body, html').animate({
            scrollTop: $(target).offset().top
        }, 1200);

    });

    /*-----------------------------------------------------------------
     * Carousel
     *-----------------------------------------------------------------*/

    $(".owl-carousel").owlCarousel({
        pagination      : false,
        navigation      : false,
        singleItem      : false,
        responsive      : true,

        paginationSpeed : 400,
        slideSpeed      : 300,
        autoPlay        : 5000,

        items           : 4,
        navigationText  : [

            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ]
    });

    /*-----------------------------------------------------------------
     * Ajax forms
     *-----------------------------------------------------------------*/

    $('.form-ajax').each(function(){

        $(this).validate({
            submitHandler: function(form) {

                var $submit_button = $(form).find('[type=submit]'),
                    submit_button_text = $submit_button.html(),
                    $modal_icon = $('.modal-icon');

                $submit_button.attr('disabled', true);
                $submit_button.html('Please wait...');

                $modal_icon.html('').removeClass('bg-green').removeClass('br-red');

                $.ajax({

                    type   : 'post',
                    url    : 'sendmail.php',
                    data   : $(form).serialize(),

                    success: function() {

                        $('.modal-result').html('Message sent successfully :)');
                        $modal_icon.html('<i class="fa fa-4x fa-check"></i>').addClass('bg-green');

                        $('.modal.in').modal('hide');
                        $('#result').modal('show');

                        $submit_button.attr('disabled', false);
                        $submit_button.html(submit_button_text);
                    },

                    error: function(){
                        $('.modal-result').html('Error sending message :(');
                        $modal_icon.html('<i class="fa fa-4x fa-close"></i>').addClass('bg-red');

                        $('.modal.in').modal('hide');
                        $('#result').modal('show');

                        $submit_button.attr('disabled', false);
                        $submit_button.html(submit_button_text);
                    }
                });
            }
        });

    });

    $('.modal').on('hide.bs.modal', function (e) {
        var $body = $('body');
        if (parseInt($body.css('padding-right')) > 0) {
            $body.css('padding-right', '');
        }
    });

    /*-----------------------------------------------------------------
     * Preloader
     *-----------------------------------------------------------------*/

    var $preloader = $('#preloader'),
        $loader = $preloader.find('.loader');

    $loader.delay(1500).fadeOut();
    $preloader.delay(1500).fadeOut('slow');

});