<script src="{{asset('frontend/js/jquery.min.js')}}" ></script>

<script src="{{asset('frontend/js/popper.min.js')}}"></script>

<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('frontend/js/slick.js')}}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

<script>

    $('.banner-slider').slick({

        dots: false,

        infinite: true,

        speed: 1000,

        autoplay: true,

        fade: false,

        cssEase: 'linear'

    });







    $('.feature-slider').slick({

        dots: false,

        infinite: true,

        speed: 300,

        slidesToShow: 4,

        slidesToScroll: 4,

        responsive: [{

            breakpoint: 1400,

            settings: {

                slidesToShow: 4,

                slidesToScroll: 4,

                infinite: true,

            }

        },



            {

                breakpoint: 1100,

                settings: {

                    slidesToShow: 3,

                    slidesToScroll: 3

                }

            },



            {

                breakpoint: 767,

                settings: {

                    slidesToShow: 3,

                    slidesToScroll: 3

                }

            }, {

                breakpoint: 575,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 2

                }

            }

            // You can unslick at a given breakpoint now by adding:

            // settings: "unslick"

            // instead of a settings object

        ]

    });



    $('.home-grid').slick({

        dots: false,

        infinite: true,

        speed: 300,

        slidesToShow: 3,

        slidesToScroll: 3,

        responsive: [{

            breakpoint: 1400,

            settings: {

                slidesToShow: 3,

                slidesToScroll: 3,

                infinite: true,

            }

        },



            {

                breakpoint: 1100,

                settings: {

                    slidesToShow: 3,

                    slidesToScroll: 3

                }

            },



            {

                breakpoint: 767,

                settings: {

                    slidesToShow: 3,

                    slidesToScroll: 3

                }

            }, {

                breakpoint: 575,

                settings: {

                    slidesToShow:1,

                    slidesToScroll: 1

                }

            }



        ]

    });

</script>

<script src="{{asset('frontend/js/main.js')}}"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $(document).on('click', '.dropdown-menu', function(e) {

            e.stopPropagation();

        });

    });

</script>

@stack('scripts')

