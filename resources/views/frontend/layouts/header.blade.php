<header class="section-header  header"  >

    <section class="header-top">

        <section class="container">

            <div class="row">

                <div class="top-message">{{ __('LIMITED-TIME OFFERS: FREE DELIVERY WITH ORDERS OVER 20 KWD') }}</div>

            </div>

        </section>

    </section>

    <section class="header-main ">

        <section class="container">

            <div class="row align-items-center">

                <div class=" col-lg-5 ">

                    <div class="head-left">

                        @if(!App::isLocale('ar'))

                            <a href="{{route('switchLan','ar')}}">

                                <div class="cart">

                                    <div class="arabic-icon">

                                        <img src="{{asset('frontend/assets/images/arabic.png')}}">

                                    </div>

                                </div>

                            </a>

                        @else

                            <a href="{{route('switchLan','en')}}">

                                <div class="cart">

                                    <p>Eng</p>

                                </div>

                            </a>

                        @endif

                        <ul class="top-menu">

                            <li>

                                <a href="{{route('contact')}}">{{ __('Contact Us') }} </a>

                            </li>

                            <li>

                                <a href="{{route('about-us')}}">{{ __('About Us') }} </a>

                            </li>

                            <li class="mobile-icons" onclick="hamburgerFun()">
                            <i class="fa fa-bars" ></i>
                                      <ul id="cd-primary-nav-mobile" class="menus mobile-header-hamburger">

                                {{ Helper::getHeaderCategory() }}

                                {{-- @foreach(Helper::getAllCategory() as $cat)

                                    <li class="menu-item">

                                                <a href="{{route('product-cat',$cat->slug)}}"> {{(App::isLocale('ar') ? $cat->title_ar : $cat->title)}}</a>

                                            </li>

                                        @endforeach --}}

                                        </ul>
                             </li>
                         
                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-4">

                    <div class="logo-part">

                        <div class="logo">

                            <a class="brand-wrap" href="/">

                                <img src="{{asset('frontend/assets/images/logo.svg')}}" alt="">

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-5 col-8">

                    <div class="head-right ">

                        <ul class="mb-0">

                            <li>

                                <div class="search-btn" data-toggle="modal" data-target="#searchPopup"></div>

                                <div class="modal fade search-popup" id="searchPopup" tabindex="-1" role="dialog"

                                     aria-labelledby="searchPopupTitle" aria-hidden="true">

                                    <div class="modal-dialog" role="document">

                                        <div class="modal-content">

                                            <div class="modal-header">

                                                <h5 class="modal-title" id="searchPopupTitle">{{ __('Search') }}</h5>

                                                <button type="button" class="close" data-dismiss="modal"

                                                        aria-label="Close">

                                                    <span aria-hidden="true">&times;</span>

                                                </button>

                                            </div>

                                            <div class="modal-body">

                                                <div class="search-cont">

                                                    <form method="POST" action="{{route('product.search')}}"

                                                          style="display: contents">

                                                        @csrf

                                                        <input class="search-field" name="search">

                                                        <button class="search-text" type="submit">{{ __('Search') }}</button>

                                                    </form>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </li>

                            <li class="HoverLogout">

                                @auth

                                    @if(Auth::user()->role=='admin')

                                        <a href="{{route('admin')}}">

                                            <div class="user"></div>

                                        </a>

                                    @else

                                        <a href="{{route('user')}}">

                                            <div class="user"></div>

                                        </a>

                                    @endif

                                @else

                                    <a href="{{route('login.form')}}">

                                        <div class="user"></div>

                                    </a>

                                @endauth

                                <ul class="tool">

                            <div class="mark"></div>
                                   
                                    </a>
                                    @if(Auth::check())

                                
                                    <a href="{{route('user')}}">
                                           <li>My  Profile</li>
                                           
                                        </a>
                                        <a href="{{route('user.logout')}}">
                                           <li>Log Out</li>
                                           
                                        </a>
                                        @else

                                        <a href="{{route('login.form') }}">
                                            <li>Login</li>
                                        </a>
                                        <a href="{{route('register.form') }}">
                                            <li>Register</li>
                                        </a>
                                       

                                        @endif
                                    
                                    
                                </ul>

                            </li>

                            <!-- <li>

                                @auth

                                    <a href="{{route('user.logout')}}">

                                        <div class="logout top-icon"></div>

                                    </a>

                                @endauth

                            </li> -->

                            <li>

                                <a href="#" data-toggle="modal" data-target="#myModal2">

                                    <span class="cart-no">{{Helper::cartCount('',session('guest_user_id'))}}</span>

                                    <div class="cart top-icon"></div>

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>

    </section>

    <div class="head-stripe">

        <div class="container">

            <div class="desk-menu">

                <nav class="box-menu">

                    <div class="menu-container">

                        <div class="menu-header-container">

                            <ul id="cd-primary-nav" class="menu">

                                {{ Helper::getHeaderCategory() }}

                                {{-- @foreach(Helper::getAllCategory() as $cat)

                                    <li class="menu-item">

                                        <a href="{{route('product-cat',$cat->slug)}}"> {{(App::isLocale('ar') ? $cat->title_ar : $cat->title)}}</a>

                                    </li>

                                @endforeach --}}

                            </ul>

                        </div>

                    </div>

                </nav>

                <div class="hamburger-menu">

                    <div class="bar"></div>

                </div>

            </div>

        </div>

    </div>





    <div class="modal right fade right-cart" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="myModalLabel2">{{ __('Shopping Cart') }}</h5>

                    <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span

                            aria-hidden="true" class="cart-close"> </span>

                    </button>

                </div>

                <div class="modal-body px-2 sidebar-cart-body">

                    <div class="sidebar-cart-product-wrapper custom-scrollbar mCustomScrollbar _mCS_1">
                        @php
                       $x= Helper::cartCount('',session('guest_user_id'))

                        @endphp
                        @if($x==0)
                        <span style="font-size:18px; margin-left: 9px;" >Your Cart Is Empty</span>
                        @endif

                        @if(is_Array(Helper::getAllProductFromCart()) || is_Object(Helper::getAllProductFromCart()))

                            @foreach(Helper::getAllProductFromCart() as $data)

                                @php
                                    
                                    $photo=explode(',',$data->product['photo']);

                                @endphp

                                <div class="navbar-cart-product">

                                    <div class="d-flex align-items-center cart-img">

                                        <a href="{{route('product-detail',$data->product['slug'])}}">

                                            <img class="img-fluid navbar-cart-product-image mCS_img_loaded" src="{{$photo[0]}}">

                                        </a>

                                        <div class="w-100">

                                            <a href="{{route('cart-delete',$data->id)}}" class="close delete-icon">

                                                <i class="fa fa-trash-o"></i>

                                            </a>

                                            <div class="pl-3">

                                                <a href="{{route('product-detail',$data->product['slug'])}}" class="navbar-cart-product-link text-dark link-animated"> {{$data->product['title']}} </a>

                                                <small class="d-block text-muted">{{ __('Quantity') }}: {{$data->quantity}} </small>

                                                <strong class="d-block text-sm">{{ __('KWD') }} {{number_format($data->price,3)}}</strong>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            @endforeach
                        @endif
                        

                    </div>

                </div>

                <div class="modal-footer sidebar-cart-footer shadow">

                    <div class="w-100">

                        <h5 class="mb-4"> {{ __('Total') }}: <span

                                class="float-right">KWD {{number_format(Helper::totalCartPrice(),3)}}</span></h5>

                        <div class="cart-button">

                            <a class="btn btn-outline-dark mr-2 btn-border" href="{{route('cart')}}">{{ __('View cart') }}</a>

                            <a class="btn btn-dark " href="{{route('checkout')}}">{{ __('Checkout') }}</a></div>

                    </div>

                </div>

            </div>



        </div>



    </div>

    <!-- modal -->

</header>

<script>
     let toggle = document.getElementById('cd-primary-nav-mobile').style.display="none";
    function hamburgerFun(){
        let toggle = document.getElementById('cd-primary-nav-mobile')

        if(toggle.style.display=="none"){
            toggle.style.display ="block";
        }else{
            toggle.style.display ="none" ;
        };
    }
</script>