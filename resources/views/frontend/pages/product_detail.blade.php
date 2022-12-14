@extends('frontend.layouts.master')

@section('meta')

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name='copyright' content=''>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="keywords" content="online shop, purchase, cart, ecommerce site, best online shopping">

	<meta name="description" content="{{$product_detail->summary}}">

	<meta property="og:url" content="{{route('product-detail',$product_detail->slug)}}">

	<meta property="og:type" content="article">

	<meta property="og:title" content="{{$product_detail->title}}">

	<meta property="og:image" content="{{$product_detail->photo}}">

	<meta property="og:description" content="{{$product_detail->description}}">

    <style>
        figure.zoom {
  background-position: 50% 50%;
  position: relative;
  overflow: hidden;
  cursor: zoom-in;
}
figure.zoom img:hover {
  opacity: 0;
}
figure.zoom img {
  transition: opacity 0.5s;
  display: block;
  width: 100%;
}
figure{
    margin:1rem !important;
}
    </style>

@endsection

@section('title','Bahja || Product Detail')

@section('main-content')

    <section class="container">

        <div class="row">

            <div class="col-lg-5 col-xl-5 pt-4 order-1 order-lg-1 photoswipe-gallery gallery-slider">

                @php

                    $photo=explode(',',$product_detail->photo);

                @endphp

                <figure itemprop="associatedMedia" itemscope="" class="zoom" onmousemove="zoom(event)" style="background-image: url({{ $photo[0]  }}); background-repeat:no-repeat;">

                    <a href="{{ $photo[0]  }}" itemprop="contentUrl" data-size="1024x1024" tabindex="0">

                        <img src="{{ $photo[0]  }}" itemprop="thumbnail" alt="Image description" class="product-image product-image-border">

                    </a>

                </figure>

                <!-- <div class="photo-gallery">

                    <div class="slider slider-for my-gallery gallery-slider__images">

                        <div>

                            <div class="item">

                                @php

                                    $photo=explode(',',$product_detail->photo);

                                @endphp

                                @foreach($photo as $data)

                                    <figure itemprop="associatedMedia" itemscope>

                                        <a href="{{$data}}" itemprop="contentUrl" data-size="1024x1024">

                                            <img src="{{$data}}" itemprop="thumbnail" alt="Image description" />

                                        </a>

                                    </figure>

                                @endforeach

                            </div>

                        </div>

                        <button class="prev-arrow slick-arrow"><i class="fa fa-angle-left"></i>{{__('Back')}}</button>

                        <button class="next-arrow slick-arrow">{{__('Next')}} <i class="fa fa-angle-right"></i></button>

                    </div>

                </div> -->

            </div>

            <div class="col-lg-7 col-xl-7 order-2 order-lg-2 product-right">

                <div class="product-details-block">

                    <div class="product-dtls-top">

                        <h3>{{(App::isLocale('ar') ? $product_detail->title_ar : $product_detail->title)}}</h3>

                    </div>

                    <div class="price-area">

                        @php

                            // $after_discount = ($product_detail->price-(($product_detail->price*$product_detail->discount)/100));
                            $after_discount = $product_detail->discount; //now discounted price

                        @endphp

                        <div class="price-block">

                            <div class="price">KWD &nbsp;<span id="selling-price"> {{number_format($after_discount,3)}}</span>
                                
                                @if($product_detail->discount > 0)
                                    <span class="offer-price">
                                        KWD <span id="list-price">{{number_format($product_detail->price,3)}}</span> 
                                    </span>
                                @endif
                                </div>

                        </div>

                        <div class="stock-block">

                            @if($product_detail->stock>0)

                                <span class="stock-text instock">{{__('In Stock')}}</span>

                            @else

                                <span class="stock-text" style="color: #F00">{{__('Out Of Stock')}}</span>

                            @endif

                        </div>

                    </div>



                    <form action="{{route('single-add-to-cart')}}" method="POST">

                        @php

                        $sizes=DB::table('products')->select('size', 'slug', 'price', 'discount')->where('title',$product_detail->title)->where('status','active')->get();

                        @endphp

                        <div class="attribute-block">

                            <h4>{{__('Product Size')}}</h4>

                            <div class="select" id="size-selector">

                            @foreach($sizes as $size)

                            {{-- <a href="{{route('product-detail',$size->slug)}}" data-slug="{{$size->slug}}" data-price="{{number_format(($size->price-(($size->price*$size->discount)/100)),3)}}" data-mrp="{{number_format($size->price,3)}}" class="@if($size->size == $product_detail->size) selected-size @endif product-size product-sizes">
                                {{$size->size}}
                            </a> --}}

                            <a href="{{route('product-detail',$size->slug)}}" data-slug="{{$size->slug}}" data-price="{{number_format($size->discount,3)}}" data-mrp="{{number_format($size->price,3)}}" class="@if($size->size == $product_detail->size) selected-size @endif product-size product-sizes">
                                {{$size->size}}
                            </a>

                            @endforeach
{{-- 
                                <select class="btn-size-group sizing-section">

                                    @foreach($sizes as $size)

                                        <a href="{{route('product-detail',$size->slug)}}" class="@if($size->size == $product_detail->size) selected-size @endif product-size">
                                            <option value="{{$size->size}}"> {{$size->size}}</option>
                                        </a>

                                    @endforeach

                                </select> --}}

                            </div>

                        </div>

                        @csrf

                        <div class="cta-part">

                            <div class="qty-btn-area">

                                <div class="qty-count">

                                    <span class="input-group-btn">

                                        <button type="button" class="btn-number minus" disabled="disabled" data-type="minus" data-field="quant[1]">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">

                                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />

                                            </svg>

                                        </button>

                                    </span>

                                    <input type="text" name="quant[1]" class="input-number" value="1" min="1" max="10" />

                                    <input id="item-slug" type="hidden" name="slug" value="{{$product_detail->slug}}">

                                    <span class="input-group-btn">

                                        <button type="button" class="btn-number plus" data-type="plus" data-field="quant[1]">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">

                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />

                                            </svg>

                                        </button>

                                    </span>

                                </div>

                            </div>



                            <div class="product-details-btn">

                                <button type="submit" class="btn cart-btn primery-btn bdr-radius">

                                    <i class="bi bi-cart3"></i>

                                    {{__('Add to Cart')}}

                                </button>

                            </div>

                        </div>

                    </form>



                    <div class="product-accordion">

                        <div id="accordion">

                            <div class="card">

                                <div class="card-header" id="headingOne">

                                    <h5 class="mb-0">

                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                            {{__('Description')}}

                                        </button>

                                    </h5>

                                </div>



                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

                                    <div class="card-body">

                                        <p>

                                            @if(App::isLocale('ar'))

                                                {!! ($product_detail->description_ar) !!}

                                            @else

                                                {!! ($product_detail->description) !!}

                                            @endif

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="pswp__bg"></div>

        <div class="pswp__scroll-wrap">

            <div class="pswp__container">

                <div class="pswp__item"></div>

                <div class="pswp__item"></div>

                <div class="pswp__item"></div>

            </div>

            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">

                        <div class="pswp__preloader__icn">

                            <div class="pswp__preloader__cut">

                                <div class="pswp__preloader__donut"></div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">

                    <div class="pswp__share-tooltip"></div>

                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

                <div class="pswp__caption">

                    <div class="pswp__caption__center"></div>

                </div>

            </div>

        </div>

    </div>

    <section class="product-section product-details-slider">

        <section class="container">

            <h1 class="text-center">{{__('You might also like')}}</h1>

            <section class="product-slider">

                <ul class="feature-slider product-grid">

                    @foreach($product_detail->rel_prods as $data)

                        @if($data->id !==$product_detail->id)

                            <li>

                                <div class="product">

                                    <a href="{{route('product-detail',$data->slug)}}">

                                        @php

                                            $photo=explode(',',$data->photo);

                                        @endphp

                                        <div class="product-image">

                                            <img src="{{$photo[0]}}" />

                                        </div>

                                        <div class="product-content">

                                            <div class="pro-box">

                                                <h3>{{(App::isLocale('ar') ? $data->title_ar : $data->title)}}</h3>

                                                @php

                                                    // $after_discount=($data->price-(($data->discount*$data->price)/100));
                                                    $after_discount = $data->discount; // now discounted price

                                                @endphp
                                                   
                                                <div class="price">KWD {{number_format($after_discount,3)}}</div>

                                            </div>

                                            <div class="cart-icon-pro"></div>

                                        </div>

                                    </a>

                                </div>

                            </li>

                        @endif

                    @endforeach

                </ul>

            </section>

        </section>

    </section>

@endsection

@push('styles')

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css'>

    <link rel="stylesheet" href="{{asset('frontend/css/zoom.css')}}">

    <style>


         .product-size {

             padding: 6px 22px;

             -webkit-transition: 0.3s all;

             transition: 0.3s all;

             border: solid black 1px;

             cursor: pointer;

             margin-right: 10px;

             color: #0a0f16;

         }

         .selected-size {

             background: #000;

             color: #fff;

         }

    </style>

@endpush

@push('scripts')

    <script type="text/javascript">

        $(document).ready(function() {

            $('.product-sizes').on('click',function(e){
                
                e.preventDefault();
                
                let selling_price = $(this).data('price');
                let mrp = $(this).data('mrp');
                let slug = $(this).data('slug');

                $('#selling-price').text(selling_price);
                $('#list-price').text(mrp);

                $('#size-selector a').removeClass('selected-size');
                $(this).addClass('selected-size');

                $('#item-slug').val(slug);

            });

            $(document).on('click', '.dropdown-menu', function(e) {

                e.stopPropagation();

            });

        });

        $('.item').slick({

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

        function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
}

    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js'></script>

<script src="{{ asset('frontend/js/script.js') }}"></script>

@endpush

