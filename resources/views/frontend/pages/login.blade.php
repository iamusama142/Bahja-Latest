@extends('frontend.layouts.master')



@section('title','Bahja || Login')



@section('main-content')

    <section class="inner-page">

        <section class="shopping-cart">

            <div class="container">

                <div class="row">

                    <div class="hero-content page-head">

                        <h3>{{__('Customer Login')}} </h3>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12  col-lg-6 col-md-6 ">

                        <div class="d-flex  mt-0 pt-5 ">

                            <div class="login-form">

                                <div class="login-area ">

                                    <form action="{{route('login.submit')}}" method="post">

                                        @csrf

                                        <h2 class="mb-4">{{__("I'm already a customer")}}</h2>

                                        <div class="form-group mt-4">

                                            <label for="checkoutBillingEmail">{{__('Email')}} *</label>

                                            <input type="email" name="email" class="form-control custom-field" placeholder="Your Email" id="checkoutBillingEmail" required="required" value="{{old('email')}}">

                                            @error('email')

                                            <span class="text-danger">{{$message}}</span>

                                            @enderror

                                        </div>

                                        <div class="form-group"><label for="checkoutBillingEmail">{{__('Password')}} *</label>

                                            <input type="password" name="password" class="form-control custom-field" placeholder="Your Password" required="required"  value="{{old('password')}}">

                                            @error('password')

                                            <span class="text-danger">{{$message}}</span>

                                            @enderror

                                        </div>

                                        <div class="form-group">

                                            <button type="submit" class="btn btn-primary  text-white float-right px-5">

                                                {{__('Log In')}}

                                            </button>

                                        </div>

                                        <!-- <div class="form-group" style="padding-top: 70px !important;">

                                            <a href="{{route('login.redirect','facebook')}}" class="btn btn-primary  text-white float-right px-5 guest-btn">

                                                <img src="{{asset('frontend/assets/images/fb.svg')}}" alt="Fb" style="width: 30px">

                                                {{__('Login With Facebook')}}

                                            </a>

                                        </div>

                                        <div class="form-group" style="padding-top: 45px !important;">

                                            <a href="{{route('login.redirect','google')}}" class="btn btn-primary  text-white float-right px-5 guest-btn">

                                                <img src="{{asset('frontend/assets/images/google.svg')}}" alt="google" style="width: 30px">

                                                {{__('Login With Google')}}

                                            </a>

                                        </div> -->

                                        @if (Route::has('password.request'))

                                            <div class="clearfix ">

                                                <a href="{{ route('password.request')}}" class="float-left small mt-2">

                                                    {{__('Forgot Password')}}?</a>

                                            </div>

                                        @endif

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12  col-lg-6 col-md-6 ">

                        <div class="d-flex  mt-0 pt-5 ">

                            <div class="login-form">

                                <div class="login-right pt-0">

                                    <h2>{{__('No account yet')}}?</h2>

                                    <div class="form-group">

                                        <a href="{{route('register.form')}}" class="btn btn-primary  text-white float-right px-5">

                                            {{__('Join Now')}}

                                        </a>

                                    </div>

                                </div>

                                <div class="login-right mt-5">

                                    <div class="or">{{__('OR')}}</div>

                                    <div class="form-group">

                                        <a href="{{route('guest.checkout')}}" class="btn btn-primary  text-white float-right px-5 guest-btn">

                                            {{__('Guest Checkout')}}

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </section>

@endsection

