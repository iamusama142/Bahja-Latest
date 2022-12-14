@extends('frontend.layouts.master')



@section('title','Bahja || Product Page')

@section('main-content')

    <section class="inner-page">

        <form action="{{route('shop.filter')}}" method="POST">

            @csrf

        <div class="container ">

            <div class="row">

                    <div class="sidebar col-xl-12 col-lg-12 ">

                        <div class="hero-content page-head">

                            <h3>{{ ($slug) ? str_replace('-',' ',$slug) :'ALL PRODUCTS' }}</h3>
                            <h4 style="color: #8a8f95; font-weight: 400; font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">({{ ($sub_slug) ? str_replace('-',' ',$sub_slug) :'ALL' }})</h4>
                            
                            <input name="category[]" type="hidden" value="{{ $slug }}">

                            @if($sub_slug)
                            <input name="subcategory[]" type="hidden" value="{{ $sub_slug }}">
                            @endif

                        </div>

                        <div class="sidebar-block">

                            <div class="accordion" id="accordionExample">

                                <div class="acc-area">

                                    <div class="accordion-heading" id="headingOne">

                                        <button type="button" class="acc-btn collapsed" data-toggle="collapse"

                                                data-target="#collapseOne">

                                            <h5>{{__('Product Size')}} ({{__('ML')}})</h5> <span class="arrow"></span></button>

                                    </div>

                                    <div id="collapseOne" class="collapse filter-drop" aria-labelledby="headingOne"

                                         data-parent="#accordionExample">

                                        <ul class="normal-checkbox filter-listing">

                                            <li>

                                                <label class="checkbox-style"> 50 {{__('ML')}}

                                                    @php

                                                        $status= false;

                                                            if (!empty($_GET['size'])) {

                                                                $array_val = explode(',',$_GET['size']);

                                                                $status = in_array('50ml', $array_val);

                                                            }

                                                    @endphp

                                                    <input type="checkbox" onclick="this.form.submit();" name="size[]" value="50ml" @if($status) checked @endif>

                                                    <span class="checkmark"></span>

                                                </label>

                                            </li>

                                            <li>

                                                <label class="checkbox-style"> 75 {{__('ML')}}

                                                    @php

                                                        $status= false;

                                                            if (!empty($_GET['size'])) {

                                                                $array_val = explode(',',$_GET['size']);

                                                                $status = in_array('75ml', $array_val);

                                                            }

                                                    @endphp

                                                    <input type="checkbox" name="size[]" value="75ml" onclick="this.form.submit();" @if($status) checked @endif>

                                                    <span class="checkmark"></span>

                                                </label>

                                            </li>

                                            <li>

                                                <label class="checkbox-style"> 100 {{__('ML')}}

                                                    @php

                                                        $status= false;

                                                            if (!empty($_GET['size'])) {

                                                                $array_val = explode(',',$_GET['size']);

                                                                $status = in_array('100ml', $array_val);

                                                            }

                                                    @endphp

                                                    <input type="checkbox" name="size[]" value="100ml" onclick="this.form.submit();" @if($status) checked @endif>

                                                    <span class="checkmark"></span>

                                                </label>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class=" d-flex align-items-center">

                                <div class="select-box">

                                    <select data-placeholder="Choose a Country..." class="select" name="sortBy" tabindex="2" onchange="this.form.submit();">

                                        <option value="">{{__('Sort By')}}</option>

                                        <option value="title"

                                                @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='title') selected @endif>

                                            {{__('default')}}

                                        </option>

                                        <option value="price1"

                                                @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='price1') selected @endif>

                                            {{__('Price:Low to High')}}

                                        </option>

                                        <option value="price2"

                                                @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='price2') selected @endif>

                                            {{__('Price:High to Low')}}

                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="products-grid col-xl-12 col-lg-12 ">

                        <div class="product-listing">

                            <section class="listing-part">

                                <ul class="product-grid pro-listing-part">

                                    @if(count($products)>0)

                                        @foreach($products as $product)

                                            <li>

                                                <div class="product">

                                                    <a href="{{route('product-detail',$product->slug)}}">

                                                        @php

                                                            $photo=explode(',',$product->photo);

                                                        @endphp

                                                        <div class="product-image">

                                                            <img src="{{$photo[0]}}" alt="Product Img">

                                                        </div>

                                                        @php

                                                            // $after_discount=($product->price-($product->price*$product->discount)/100);
                                                            $after_discount = $product->discount; // now discounted price

                                                        @endphp

                                                        <div class="product-content">
                                                            
                                                            <div class="pro-box">

                                                                <h3>{{(App::isLocale('ar') ? $product->title_ar : $product->title)}}</h3>

                                                                <div class="price">KWD  {{number_format($after_discount,3)}}</div>

                                                            </div>

                                                            <a href="{{route('add-to-cart',$product->slug)}}">

                                                                <div class="cart-icon-pro" ></div>

                                                            </a>
                                                            <!-- <a href="{{route('add-to-cart',$product->slug)}}" data-toggle="modal" data-target="#myModal2">

                                                                <div class="cart-icon-pro" ></div>

                                                            </a> -->

                                                        </div>

                                                    </a>

                                                </div>



                                            </li>

                                        @endforeach

                                    @else

                                        <h4 class="text-dark" style="margin:100px auto;">{{__('There are no products')}}.</h4>

                                    @endif

                                </ul>

                                <div class="col-md-12 justify-content-center d-flex">

                                    @if(Route::current()->getName() == 'product-grids')

                                        {{$products->appends($_GET)->links()}}

                                    @endif

                                </div>

                            </section>

                        </div>

                    </div>

            </div>

        </div>

        </form>

    </section>

@endsection



@push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

@endpush



