@extends('frontend.layouts.master')
@section('title','Bahja | Order Cancle')
@section('main-content')
    <section class="product-details-area ptb-100">
        <div class="container">
            <div class="col-12">
                <div class="about-img overlay text-center">
                    <img src="{{asset('frontend/assets/images/order-cancel.png')}}" alt="">
                    <div>
                        <div class="pb-3 " style="margin-top: 30px">
                            <a href="{{route('product-grids')}}" class="more-link">
                                <button class="btn btn-primary  text-white" title="Continue shopping"><span>Continue shopping</span></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
