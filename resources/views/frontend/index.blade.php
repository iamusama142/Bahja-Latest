@extends('frontend.layouts.master')

@section('title','Bahja')

@section('main-content')

    <section class="main-container">

        @if(count($banners)>0)

            <section class="home-slider ">

                <ul class="banner-slider ml-0 pl-0 ">

                    @foreach($banners as $key=>$banner)

                        <div class="banner-img">

                            <img src="{{$banner->photo}}" alt="banner Img">

                        </div>

                    @endforeach

                </ul>

            </section>

        @endif

        <section class="home-cont demo-gap">

            <div class="category-area">

                <!-- banner-->

                <div class="container">

                    <div class="home-grid Product_slider_on_Home">

                        @php

                            $category_lists=DB::table('categories')->where('status','active')->where('category_show','yes')->get();

                        @endphp

                      

                            @foreach($category_lists as $cat)
                               
                                @if($cat->is_parent==1)

                                    <div class="item ">

                                        <a href="{{route('product-cat',$cat->slug)}}">

                                            <div class="cat-block">

                                                    <div class="cat-img">

                                                        <img src="{{$cat->photo}}" alt="category_img"></div>

                                                    <div class="cate-head">

                                                        <h3>{{(App::isLocale('ar') ? $cat->title_ar : $cat->title)}}</h3>

                                                        <div class="more-btn">{{__('Shop Now')}}</div>

                                                    </div>

                                            </div>

                                        </a>

                                    </div>

                                @endif

                            @endforeach

                        

                    </div>

                </div>

            </div>



            <section class="product-section">

                <div class="container">

                    <section class="product-slider">

                        <div class="product-head">

                            <h1>{{__('Best Sellers')}}</h1>

                            <div class="view-all"><a href="{{route('product-grids')}}">{{__('View All')}}</a></div>

                        </div>

                        <ul class="feature-slider product-grid">

                            @if($product_lists)

                                @foreach($product_lists as $key=>$product)

                                    <li>

                                        <div class="product">

                                            <a href="{{route('product-detail',$product->slug)}}">

                                                <div class="product-image">

                                                    @php

                                                        $photo=explode(',',$product->photo);

                                                    @endphp

                                                    <img src="{{$photo[0]}}" alt="product Img">

                                                </div>

                                                <div class="product-content">

                                                    <div class="pro-box">

                                                        <h3>{{(App::isLocale('ar') ? $product->title_ar : $product->title)}}</h3>

                                                        @php

                                                            // $after_discount=($product->price-($product->price*$product->discount)/100);
                                                            $after_discount = $product->discount; // discounted price now

                                                        @endphp

                                                        <div class="price">KWD {{number_format($after_discount,3)}}</div>

                                                    </div>

                                                    <a href="{{route('add-to-cart',$product->slug)}}" class="buy">

                                                        <div class="cart-icon-pro"></div>

                                                    </a>

                                                </div>

                                            </a>

                                        </div>

                                    </li>

                                @endforeach

                            @endif

                        </ul>
                        
                       
                    </section>

                </div>

            </section>

            <section class="product-section">

                <div class="container">

                    <section class="product-slider">

                        <div class="product-head">

                            <h1>{{__('New Arrivals')}}</h1>

                            <div class="view-all"><a href="{{route('product-grids')}}">{{__('View All')}}</a></div>

                        </div>

                        <ul class="feature-slider product-grid">

                            @php

                                $product_lists=DB::table('products')->where('status','active')->where('productType','newarrivals')->groupBy('title')->orderBy('id','DESC')->limit(6)->get();

                            @endphp

                            @foreach($product_lists as $product)

                            @php

                            // $after_discount=($product->price-($product->price*$product->discount)/100);
                            $after_discount = $product->discount; // discounted price now

                            @endphp


                                <li>

                                    <div class="product">

                                        <a href="{{route('product-detail',$product->slug)}}">

                                            <div class="product-image">

                                                @php

                                                    $photo=explode(',',$product->photo);

                                                @endphp

                                                <img src="{{$photo[0]}}" alt="product img">

                                            </div>

                                            <div class="product-content">

                                                <div class="pro-box">

                                                    <h3>{{(App::isLocale('ar') ? $product->title_ar : $product->title)}}</h3>

                                                    <div class="price">KWD {{number_format($after_discount,3)}}</div>

                                                </div>

                                                <a href="{{route('add-to-cart',$product->slug)}}" class="buy">

                                                    <div class="cart-icon-pro"></div>

                                                </a>

                                            </div>

                                        </a>

                                    </div>

                                </li>

                            @endforeach

                        </ul>

                    </section>

                </div>

            </section>

        </section>

        <section class="new-arrivel about-part">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-sm-12">

                        <div class="arrival-img">

                            <img src="{{asset('frontend/assets/images/new-lunched.jpg')}}" alt="Lunched">

                        </div>

                    </div>

                    <div class="col-lg-6 col-sm-12">

                        <div class="lunch-right">

                            <h3>{{__('New Launched')}}</h3>

                            <h1>{{__('Perfume')}}</h1>

                            <p> {{__('A range of carefully selected fragrances that represent a history of expertise to be a

                                part of your life')}}</p>

                            <span class="link-text">

                                <a href="{{route('product-grids')}}">{{__('SHOP NOW')}}</a>

                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </section>

@endsection

@push('scripts')

    <script>

        $(document).ready(function (){

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

        });

    </script>

@endpush





