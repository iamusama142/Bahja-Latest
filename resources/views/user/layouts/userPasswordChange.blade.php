@extends('user.layouts.master')
@section('title','Bahja | Change Password')
@section('main-content')
    <section class="inner-page">
        <section class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-12 page-head">
                        <h2 class="mb-3 mt-4 ">{{__('Password Change')}}</h2>
                    </div>
                </div>
                <div class="row account-cont">
                    @include('user.layouts.sidebar')
                    <div class="col-lg-8 col-xl-9 account-right">
                        <div class="block mb-5">
                            <div class="block-header mb-4">
                                <h5>{{__('Change New Password')}}</h5>
                            </div>
                            <div class="block-body">
                                <form method="POST" action="{{ route('change.password') }}">
                                    @csrf

                                    @foreach ($errors->all() as $error)
                                        <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label" for="current_password">{{__('Current Password')}}</label>
                                                <input class="form-control custom-field" id="current_password" type="text" name="current_password">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label" for="new_password">{{__('New Password')}}</label>
                                                <input class="form-control custom-field" id="new_password" type="text" name="new_password">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label" for="new_confirm_password">
                                                    {{__('New Confirm Password')}}</label>
                                                <input class="form-control custom-field" id="new_confirm_password" type="text" name="new_confirm_password">
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
