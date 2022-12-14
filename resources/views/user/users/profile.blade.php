@extends('user.layouts.master')
@section('title','Bahja | Profile')
@section('main-content')
    <section class="inner-page">
        <section class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-12 page-head">
                        <h2 class="mb-3 mt-4 ">{{__('Profile')}}</h2>
                    </div>
                </div>
                <div class="row account-cont">
                    @include('user.layouts.sidebar')
                    <div class="col-lg-8 col-xl-9 account-right">

                        <div class="block mb-5">
                            <div class="block-header mb-4">
                                <h5>{{__('Personal details')}}</h5>
                            </div>
                            <div class="block-body">
                                <form action="{{route('user-profile-update',$profile->id)}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label" for="email">{{__('Email')}}</label>
                                                <input class="form-control custom-field" id="email" name="email" type="email" disabled value="{{$profile->email}}">
                                                @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">{{__('Name')}}</label>
                                                <input class="form-control custom-field" id="name" type="text" value="{{$profile->name}}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone">{{__('Phone')}}</label>
                                                <input class="form-control custom-field" id="phone" type="text" value="{{$profile->phone}}" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-4">
                                        <button class="btn btn-outline-dark" type="submit">
                                            <i class="fa fa-save mr-2"></i>
                                            {{__('Save changes')}}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
