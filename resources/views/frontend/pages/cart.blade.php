@extends('frontend.layouts.master')

@section('title','Bahja | Cart')

@section('main-content')

    <section class="inner-page">



        <section class="shopping-cart">

            <div class="container">

                <div class="row">

                    <div class="hero-content page-head">

                        <h3>{{__('Shopping Cart')}}</h3>

                    </div>

                </div>

                <div class="row cart-cont">

                    <div class="col-12 col-md-12">

                        <form action="{{route('cart.update')}}" method="POST">

                            @csrf

                            <ul class="list-group list-group-lg list-group-flush-x mb-6">

                                <li class="list-group-item cart-head">

                                    <div class="row align-items-center">

                                        <div class="col-4 ">

                                            {{__('PRODUCT')}}

                                        </div>

                                        <div class="col-2 text-right">

                                            {{__('UNIT PRICE')}}

                                        </div>

                                        <div class="col-3 text-right">

                                            {{__('QUANTITY')}}

                                        </div>



                                        <div class="col-3 text-right">

                                            {{__('TOTAL')}}

                                        </div>



                                    </div>

                                </li>

                                @if(Helper::getAllProductFromCart())

                                    @foreach(Helper::getAllProductFromCart() as $key=>$cart)

                                        <li class="list-group-item">

                                            <div class="row align-items-center">

                                                <div class="col-12 col-lg-4 col-md-4 ">

                                                    <div class="d-flex">

                                                        <div class="product-cart-img">

                                                            @php

                                                                $photo=explode(',',$cart->product['photo']);

                                                            @endphp

                                                            <a href="{{route('product-detail',$cart->product['slug'])}}" target="_blank">

                                                                <img src="{{$photo[0]}}" alt="product img" class="img-fluid">

                                                            </a>

                                                            <div class="remove">

                                                                <a class=" remove-btn " href="{{route('cart-delete',$cart->id)}}">

                                                                    <span class="cart-close"></span> <span class="close-text">{{__('Remove')}}</span>

                                                                </a>

                                                            </div>

                                                        </div>

                                                        <div class="d-flex  h6 product-cart">

                                                            <a class="text-body" href="{{route('product-detail',$cart->product['slug'])}}">

                                                                <h3>{{(App::isLocale('ar') ? $cart->product['title_ar'] : $cart->product['title'])}}  </h3>

                                                            </a>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-6 col-lg-2 col-md-2">

                                                    <div class="price text-right">KWD {{number_format($cart['price'],3)}} </div>

                                                </div>

                                                <div class="col-6 col-lg-3 col-md-3">

                                                    <div class="d-flex align-items-end justify-content-end">

                                                        <div class="qty-count ">

                                                                <span class="input-group-btn">

                                                         <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[{{$key}}]">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">

                                                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />

                                                            </svg>

                                                         </button>

                                                      </span>

                                                            <input type="text" name="quant[{{$key}}]" class="input-number" value="{{$cart->quantity}}" min="1" max="10" >

                                                            <input type="hidden" name="qty_id[]" value="{{$cart->id}}">

                                                            <span class="input-group-btn">

                                                             <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[{{$key}}]">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">

                                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />

                                                                </svg>

                                                             </button>

                                                      </span>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-12 col-lg-3 col-md-3 text-right">

                                                    <div class="ml-auto price">KWD {{number_format($cart['amount'],3)}} </div>

                                                </div>

                                            </div>

                                        </li>

                                    @endforeach

                                @endif

                            </ul>

                            <div class="updateCart">

                                <button class="btn btn-dark float-right" type="submit">{{__('Update Cart')}}</button>

                            </div>

                        </form>

                    </div>



                    <div class="col-lg-5">

                        <form class="mb-7 mb-md-0 cupon-box" action="{{route('coupon-store')}}" method="POST">

                            <label class="h6" for="cartCouponCode">

                                {{__('Coupon code')}}:

                            </label>

                            <div class="row form-row">

                                <div class="col-8">

                                    <input class="form-control custom-field " id="cartCouponCode" type="text" placeholder="Enter coupon code*" name="code">

                                </div>

                                <div class="col-auto">

                                    <button class="btn btn-sm btn-dark px-3  py-3" type="submit">

                                        {{__('Apply')}}

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                    <div class="col-12 col-md-5 col-lg-5  cart-right ml-auto">

                        <div class="card mb-4 bg-light ">

                            <div class="card-body">

                                <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">

                                    <li class="list-group-item d-flex">

                                        <span>{{__('Total')}}</span> <span class="ml-auto font-size-sm">KWD {{number_format(Helper::totalCartPrice(),3)}}</span>

                                    </li>

                                    @if(session()->has('coupon'))

                                        <li class="list-group-item d-flex">

                                            <span class="text-success">{{__('You Save')}}</span> <span class="ml-auto font-size-sm text-success">KWD {{number_format(Session::get('coupon')['value'],2)}}</span>

                                        </li>

                                    @endif

                                    @php

                                        $total_amount=Helper::totalCartPrice();

                                        if(session()->has('coupon')){

                                            $total_amount=$total_amount-Session::get('coupon')['value'];

                                        }

                                    @endphp

                                    <li class="list-group-item d-flex font-size-lg font-weight-bold">

                                        <span>{{__('You Pay')}}</span> <span class="ml-auto font-size-sm">KWD {{number_format($total_amount,3)}} </span>

                                    </li>



                                </ul>

                            </div>

                        </div>

                        <div>

                            <a class="btn  btn-primary mb-2  text-white px-5 fix-btn float-right" href="{{route('checkout')}}">

                                {{__('Proceed to Checkout')}}</a></div>

                        <a class="btn btn-link btn-sm px-0 text-body btn-border" href="{{route('product-grids')}}">

                            <svg class="bi" fill="currentColor" width="25" height="25">

                                <use xlink:href="frontend/assets/images/bootstrap-icons.svg#arrow-left"/>

                            </svg>

                            {{__('Continue Shopping')}}

                        </a>

                    </div>

                </div>

            </div>

        </section>

    </section>



@endsection



