@extends('frontend.layouts.master')

@section('title','Bahja Login')
@section('main-content')
      <section class="inner-page">
          <section class="shopping-cart">
              <div class="container">
                  <div class="row">
                      <div class="hero-content page-head">
                          <h3>{{ __('Login Admin') }}</h3>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12  col-lg-6 col-md-6 " style="margin: auto">
                          <div class="d-flex  mt-0 pt-5 ">
                              <div class="login-form">
                                  <div class="login-area ">
                                      <form class="form" method="POST" action="{{route('login.submit')}}">
                                          @csrf
                                          <div class="form-group mt-4">
                                              <label for="checkoutBillingEmail">{{ __('E-Mail Address') }}</label>
                                              <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..."  required autocomplete="email" autofocus>
                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                          </div>
                                          <div class="form-group"><label for="checkoutBillingEmail">Password *</label>
                                              <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password"  name="password" required autocomplete="current-password">
                                              @error('password')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                          </div>
                                          <div class="form-group">
                                              <button type="submit" class="btn btn-primary  text-white float-right px-5">
                                                  Log In
                                              </button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </section>
@endsection
