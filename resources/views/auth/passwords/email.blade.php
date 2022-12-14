@extends('frontend.layouts.master')

@section('title','Bahja Login')
@section('main-content')
    <div class="text-center">
          <section class="inner-page">
              <section class="shopping-cart">
                  <div class="container">
                      <div class="row">
                          <div class="hero-content page-head">
                              <h3>{{ __('Reset Password') }}</h3>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-12  col-lg-6 col-md-6 ">
                              <div class="d-flex  mt-0 pt-5 ">
                                  <div class="login-form">
                                      <div class="login-area ">
                                          @if (session('status'))
                                              <div class="alert alert-success" role="alert">
                                                  {{ session('status') }}
                                              </div>
                                          @endif
                                              <form class="user"  method="POST" action="{{ route('password.email') }}">
                                                  @csrf
                                                  <div class="form-group">
                                                      <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                      @error('email')
                                                      <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                      @enderror
                                                  </div>
                                                  <button type="submit" class="btn btn-primary btn-user btn-block">
                                                      Reset Password
                                                  </button>
                                              </form>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </section>
          </section>
    </div>
@endsection
