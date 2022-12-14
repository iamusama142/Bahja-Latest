@extends('frontend.layouts.master')

@section('title','Bahja | Contact Us')

@section('main-content')

    <section class="inner-page mt-0">





        <section class="content-page">

            <div class="inner-banner">

                <div class="banner-head">

                </div>

                <img src="{{asset('frontend/assets/images/banner.jpg')}}">

            </div>

            <section class="container">

                <div class="row">

                    <div class="col-12 contact-address">

                        <h3>{{__('Contact Address')}}</h3>

                        @php

                            $settings=DB::table('settings')->get();

                        @endphp
                        </div>

<div class="contactDesignBox">
<div class="contact-left">
<h5>We will be happy to hear from you</h5>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea repudiandae hic necessitatibus dignissimos suscipit dolores, minima accusantium aperiam iste ad repellendus voluptatem dolor fuga quam obcaecati optio ipsum quos iure.</p>


                        <ul class="contact-list">

                            <li>

                                <span> <i class="fa fa-map-marker"></i></span>

                                 <p>@foreach($settings as $data){{$data->address}}@endforeach</p>

                            </li>

                            <li>

                                <span>  <i class="fa fa-phone"></i></span>

                                <p>{{__('Phone')}} <a href="tel:@foreach($settings as $data){{$data->phone}}@endforeach"> @foreach($settings as $data){{$data->phone}}@endforeach </a></p>

                            </li>

                            <li>

                                <span>  <i class="fa fa-envelope"></i></span>

                                <p><a href="mailto:@foreach($settings as $data){{$data->email}}@endforeach">@foreach($settings as $data){{$data->email}}@endforeach</a></p>

                            </li>

                        </ul>

                        
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d890602.8386521424!2d46.97524417847302!3d29.314100317648705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!5e0!3m2!1sen!2sin!4v1669397815524!5m2!1sen!2sin" width="400" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                        </div>

                    <form method="post" action="{{route('contact.store')}}">

                        @csrf

                        <div class="col-12">

                            <div class="row mb-5 form-area contact-from">

                                <div class="col-12 col-md-12">

                                    <h3>{{__('Send us a Message')}} </h3>

                                </div>

                                <div class="col-12 col-md-12">

                                    <div class="form-group">

                                        <input class="form-control custom-field " placeholder="{{__('Full Name')}}*" type="text" required="" name="name"  value="{{old('name')}}">

                                        @error('name')

                                        <span class='text-danger'>{{$message}}</span>

                                        @enderror

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-group">

                                        <input class="form-control custom-field" type="email" placeholder="{{__('Email')}}*" required="" name="email" value="{{old('email')}}">

                                        @error('email')

                                        <span class='text-danger'>{{$message}}</span>

                                        @enderror

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-group">

                                        <input class="form-control custom-field" type="text" placeholder="{{__('Phone')}}" maxlength="8" minlength="8" required="" name="phone" value="{{old('phone')}}">

                                        @error('phone')

                                        <span class='text-danger'>{{$message}}</span>

                                        @enderror

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-group">

                                        <input class="form-control custom-field" type="text" placeholder="{{__('Subject')}}"  required="" name="subject" value="{{old('subject')}}">

                                        @error('subject')

                                        <span class='text-danger'>{{$message}}</span>

                                        @enderror

                                    </div>

                                </div>

                                <div class="col-12 ">

                                    <div class="form-group">

                                        <textarea class="form-control custom-field" placeholder="{{__('Messages')}}" name="message">{{old('message')}}</textarea>

                                        @error('message')

                                        <span class='text-danger'>{{$message}}</span>

                                        @enderror

                                    </div>

                                </div>

                                <div class="col-12 d-flex justify-content-end">

                                <button class="btn btn-dark rounded-0 py-3 px-5 text-primary fix-btn border-0" value="Submit">

                                    {{__('Submit')}}</button>

                            </div>

                        </div>

                    </form>

                    </div>


                </div>

                

            </section>

        </section>

    </section>

@endsection

