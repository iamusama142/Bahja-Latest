<script src="{{asset('backend/js/bundle.js?ver=3.0.3')}}"></script>

<script src="{{asset('backend/js/scripts.js?ver=3.0.3')}}"></script>

<!-- <script src="{{asset('backend/js/charts/chart-ecommerce.js?ver=3.0.3')}}"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>



<script src="{{asset('frontend/js/snackbar.min.js ')}}"></script>

<script>

    $(document).ready(function (){

        $('.arabic-lan').hide();

        $('.arabic-title').hide();

        $("#customSwitch1").on("change", function(event) {

            if($(this).is(":checked")) {

                $('.arabic-lan').show();

                $('.english-lan').hide();

                $('.english-title').hide();

                $('.arabic-title').show();

            } else {

                $('.english-lan').show();

                $('.arabic-lan').hide();

                $('.english-title').show();

                $('.arabic-title').hide();

            }

        });



    });

</script>

@stack('scripts')

