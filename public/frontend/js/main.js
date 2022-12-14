$(document).ready(function() {

    // Add minus icon for collapse element which is open by default

    $(".collapse.show").each(function() {

        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");

    });



    // Toggle plus minus icon on show hide of collapse element

    $(".collapse").on('show.bs.collapse', function() {

        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");

    }).on('hide.bs.collapse', function() {

        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");

    });

});





$('.btn-number').click(function(e) {

    e.preventDefault();



    fieldName = $(this).attr('data-field');

    type = $(this).attr('data-type');

    var input = $("input[name='" + fieldName + "']");

    var currentVal = parseInt(input.val());

    if (!isNaN(currentVal)) {

        if (type == 'minus') {



            if (currentVal > input.attr('min')) {

                input.val(currentVal - 1).change();

            }

            if (parseInt(input.val()) == input.attr('min')) {

                $(this).attr('disabled', true);

            }



        } else if (type == 'plus') {



            if (currentVal < input.attr('max')) {

                input.val(currentVal + 1).change();

            }

            if (parseInt(input.val()) == input.attr('max')) {

                $(this).attr('disabled', true);

            }



        }

    } else {

        input.val(0);

    }

});

$('.input-number').focusin(function() {

    $(this).data('oldValue', $(this).val());

});

$('.input-number').change(function() {



    minValue = parseInt($(this).attr('min'));

    maxValue = parseInt($(this).attr('max'));

    valueCurrent = parseInt($(this).val());



    name = $(this).attr('name');

    if (valueCurrent >= minValue) {

        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')

    } else {

        alert('Sorry, the minimum value was reached');

        $(this).val($(this).data('oldValue'));

    }

    if (valueCurrent <= maxValue) {

        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')

    } else {

        alert('Sorry, the maximum value was reached');

        $(this).val($(this).data('oldValue'));

    }





});

$(".input-number").keydown(function(e) {

    // Allow: backspace, delete, tab, escape, enter and .

    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||

        // Allow: Ctrl+A

        (e.keyCode == 65 && e.ctrlKey === true) ||

        // Allow: home, end, left, right

        (e.keyCode >= 35 && e.keyCode <= 39)) {

        // let it happen, don't do anything

        return;

    }

    // Ensure that it is a number and stop the keypress

    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

        e.preventDefault();

    }

});







function smallerMenu() {

    var sc = $(window).scrollTop();

    if (sc > 40) {

        $('#header-sroll').addClass('small');

    } else {

        $('#header-sroll').removeClass('small');

    }

}

(function($) {

    var size;



    //SMALLER HEADER WHEN SCROLL PAGE





    // VERIFY WINDOW SIZE

    function windowSize() {

        size = $(document).width();

        if (size >= 991) {

            $('body').removeClass('open-menu');

            $('.hamburger-menu .bar').removeClass('animate');

        }

    };



    // ESC BUTTON ACTION

    $(document).keyup(function(e) {

        if (e.keyCode == 27) {

            $('.bar').removeClass('animate');

            $('body').removeClass('open-menu');

            $('header .desk-menu .menu-container .menu .menu-item-has-children a ul').each(function(index) {

                $(this).removeClass('open-sub');

            });

        }

    });



    $('#cd-primary-nav > li').hover(function() {

        $whidt_item = $(this).width();

        $whidt_item = $whidt_item - 8;



        $prevEl = $(this).prev('li');

        $preWidth = $(this).prev('li').width();

        var pos = $(this).position();

        pos = pos.left + 4;

        $('header .desk-menu .menu-container .menu>li.line').css({

            width: $whidt_item,

            left: pos,

            opacity: 1

        });

    });



    // ANIMATE HAMBURGER MENU

    $('.hamburger-menu').on('click', function() {

        $('.hamburger-menu .bar').toggleClass('animate');

        if ($('body').hasClass('open-menu')) {

            $('body').removeClass('open-menu');

        } else {

            $('body').toggleClass('open-menu');

        }

    });



    $('header .desk-menu .menu-container .menu .menu-item-has-children ul').each(function(index) {

        $(this).append('<li class="back"><a href="#">Back</a></li>');

    });



    // RESPONSIVE MENU NAVIGATION

    $('header .desk-menu .menu-container .menu .menu-item-has-children > a').on('click', function(e) {

        e.preventDefault();

        if (size <= 991) {

            $(this).next('ul').addClass('open-sub');

        }

    });



    // CLICK FUNCTION BACK MENU RESPONSIVE

    $('header .desk-menu .menu-container .menu .menu-item-has-children ul .back').on('click', function(e) {

        e.preventDefault();

        $(this).parent('ul').removeClass('open-sub');

    });



    $('body .over-menu').on('click', function() {

        $('body').removeClass('open-menu');

        $('.bar').removeClass('animate');

    });



    $(document).ready(function() {

        windowSize();

    });



    $(window).scroll(function() {

        smallerMenu();

    });



    $(window).resize(function() {

        windowSize();

    });



})(jQuery);





$(document).ready(function() {

    $(".search-btn").click(function() {

        $(".search").toggleClass("search-show", 500);

    });

});









/*

		variables

	*/



var $imagesSlider = $(".gallery-slider .gallery-slider__images>div"),

    $thumbnailsSlider = $(".gallery-slider__thumbnails>div");



/*

	sliders

*/



// images options

$imagesSlider.slick({

    speed: 300,

    slidesToShow: 1,

    slidesToScroll: 1,

    cssEase: 'linear',

    fade: true,

    draggable: false,

    asNavFor: ".gallery-slider__thumbnails>div",

    prevArrow: '.gallery-slider__images .prev-arrow',

    nextArrow: '.gallery-slider__images .next-arrow'

});



// thumbnails options

$thumbnailsSlider.slick({

    speed: 300,

    slidesToShow: 5,

    slidesToScroll: 1,

    cssEase: 'linear',

    centerMode: false,

    draggable: false,

    focusOnSelect: true,

    asNavFor: ".gallery-slider .gallery-slider__images>div",

    prevArrow: '.gallery-slider__thumbnails .prev-arrow',

    nextArrow: '.gallery-slider__thumbnails .next-arrow',

    responsive: [{

            breakpoint: 720,

            settings: {

                slidesToShow: 4,

                slidesToScroll: 4

            }

        },

        {

            breakpoint: 576,

            settings: {

                slidesToShow: 3,

                slidesToScroll: 3

            }

        },

        {

            breakpoint: 350,

            settings: {

                slidesToShow: 2,

                slidesToScroll: 2

            }

        }

    ]

});



/* 

	captions

*/



var $caption = $('.gallery-slider .caption');



// get the initial caption text

var captionText = $('.gallery-slider__images .slick-current img').attr('alt');

updateCaption(captionText);



// hide the caption before the image is changed

$imagesSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

    $caption.addClass('hide');

});



// update the caption after the image is changed

$imagesSlider.on('afterChange', function(event, slick, currentSlide, nextSlide) {

    captionText = $('.gallery-slider__images .slick-current img').attr('alt');

    updateCaption(captionText);

});



function updateCaption(text) {

    // if empty, add a no breaking space

    if (text === '') {

        text = '&nbsp;';

    }

    $caption.html(text);

    $caption.removeClass('hide');

}