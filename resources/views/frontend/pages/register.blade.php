@extends('frontend.layouts.master')

@section('title','Bahja || Register')

@section('main-content')
    <section class="inner-page">
        <section class="shopping-cart">
            <div class="container">
                <div class="hero-content page-head">
                    <h3>{{__('Create New Account')}}</h3>
                </div>
                <div class="h-100 d-flex justify-content-center mt-5 ">
                    <div class="login-form">
                        <div class="login-area  ">
                            <form action="{{route('register.submit')}}" method="post">
                                @csrf
                                <h2 class="text-center mb-4">{{__('Register')}}</h2>
                                <div class="form-group mt-4">
                                    <label for="Full Name">{{__('Full Name')}} *</label>
                                    <input type="text" id="Full Name" class="form-control custom-field" required="required" value="{{old('name')}}" name="name">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Email Id">{{__('Email Id')}} *</label>
                                    <input type="email" name="email" class="form-control custom-field" required="required" value="{{old('email')}}" >
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Phone">{{__('Phone')}} *</label>
                                    <input type="number" class="form-control custom-field" required="required" value="{{old('email')}}" id="Phone" name="phone">
                                    @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Password">{{__('Password')}} *</label>
                                    <input type="password" id="Password" name="password" class="form-control custom-field" required="required" value="{{old('password')}}">
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Password">{{__('Confirm Password')}} *</label>
                                    <input type="password" id="Password" name="password_confirmation" class="form-control custom-field" required="required" value="{{old('password_confirmation')}}">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary   text-white float-right px-5">
                                        {{__('Create An Account')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="login-btm ">
                    <p class="text-center"> {{__('Existing User')}}? <a href="{{route('login.form')}}">{{__   ('Sign In')}}</a></p>
                </div>
            </div>
        </section>
    </section>
@endsection
