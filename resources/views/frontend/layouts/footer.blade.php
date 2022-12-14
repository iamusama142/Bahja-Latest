@php

    $settings=DB::table('settings')->get();

@endphp

<footer>

    <section class="footer-bottom">

        <section class="container">

            <div class="row">

                <div class="col-lg-3  mb-lg-0">

                    <div class="ft-logo">

                        <a href="/">

                            <img src="{{asset('frontend/assets/images/logo.svg')}}" alt="logo">

                        </a>
                        <section class="social-block">

<ul>

    <li>

        <a href="https://www.facebook.com/@foreach($settings as $data){{$data->facebook}}@endforeach"><i class="fa fa-facebook-f"></i></a>

    </li>

    <li>

        <a href="https://twitter.com/@foreach($settings as $data){{$data->twitter}}@endforeach"><i class="fa fa-twitter"></i></a>

    </li>

</ul>

</section>

                    </div>

                    <!-- <section class="social-block">

                        <ul>

                            <li>

                                <a href="https://www.facebook.com/@foreach($settings as $data){{$data->facebook}}@endforeach"><i class="fa fa-facebook-f"></i></a>

                            </li>

                            <li>

                                <a href="https://twitter.com/@foreach($settings as $data){{$data->twitter}}@endforeach"><i class="fa fa-twitter"></i></a>

                            </li>

                        </ul>

                    </section> -->

                </div>

                <div class="col-lg-3  mb-lg-0">

                    <div class=" footer-menu" >

                        <ul class="list-unstyled">

                            @foreach(Helper::getAllCategory() as $cat)

                                <li class="menu-item">

                                    <a href="{{route('product-cat',$cat->slug)}}"> {{(App::isLocale('ar') ? $cat->title_ar : $cat->title)}} </a>

                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>

                <div class="col-lg-3  mb-lg-0">

                    <div class=" footer-menu" >

                        <ul class="list-unstyled">

                            <li><a href="/"> {{__('Home')}}</a></li>

                            <li><a href="{{route('about-us')}}">{{ __('About Us') }}</a></li>

                            <li><a href="{{route('contact')}}">{{__('Contact Us')}}</a></li>

                            <li><a href="{{route('tc')}}">{{__('Terms of Use')}}</a></li>

                            <li><a href="{{route('faq')}}">{{__('FAQ')}}</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-3  mb-lg-0">



                    <div class="ft-contact">



                        <ul>

                            <li> <a href="https://wa.me/@foreach($settings as $data){{$data->whatsapp}}@endforeach">

                                    <div class="ft-img"> <img src="{{asset('frontend/assets/images/phone.png')}}" alt="Email"></div>

                                    <h3 dir="ltr">@foreach($settings as $data) {{$data->whatsapp}} @endforeach</h3>

                                </a>

                            </li>

                            <li>

                                <a href="mailto:@foreach($settings as $data){{$data->email}}@endforeach">

                                    <div class="ft-img">

                                        <img src="{{asset('frontend/assets/images/email.png')}}" alt="Email">

                                    </div>

                                    <h3>@foreach($settings as $data){{$data->email}}@endforeach</h3>

                                </a>

                            </li>

                            <li>

                                <a href="https://www.instagram.com/@foreach($settings as $data){{$data->instagram}}@endforeach" >

                                    <div class="ft-img">

                                        <img src="{{asset('frontend/assets/images/instagram-img.svg')}}" alt="Instagram">

                                    </div>

                                    <h3># @foreach($settings as $data){{$data->instagram}}@endforeach</h3>

                                </a>

                            </li>

                        </ul>



                    </div>



                </div>





            </div>





        </section>



    </section>

    <section class="copy-part">

        <div class="container">

            <div class="row">

                <div class="col-8 ">

                    <p>

                        © {{__('2022 All rights reserved. Bahja')}}

                    </p>

                </div>



            </div>

        </div>

    </section>

</footer>

