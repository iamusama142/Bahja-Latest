<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">

    <div class="nk-sidebar-element nk-sidebar-head">

        <div class="nk-sidebar-brand">

            <a href="{{route('admin')}}" class="logo-link nk-sidebar-logo">

                <span class="text-dark" style="font-size: 50px; font-weight: 700; font-family: 'DM Sans', sans-serif;">admin</span>

            </a>

        </div>

        <div class="nk-menu-trigger me-n2">

            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>

            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>

        </div>

    </div><!-- .nk-sidebar-element -->

    <div class="nk-sidebar-element">

        <div class="nk-sidebar-content">

            <div class="nk-sidebar-menu" data-simplebar>

                <ul class="nk-menu">

                    <li class="nk-menu-item {{Request::path()=='admin' ? '' : 'dashboard' }}">

                        <a href="{{route('admin')}}" class="nk-menu-link ">

                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>

                            <span class="nk-menu-text">Dashboard</span>

                        </a>

                    </li>



                    <li class="nk-menu-heading">

                        <h6 class="overline-title text-primary-alt">Media</h6>

                    </li>



                    <li class="nk-menu-item">

                        <a href="{{route('file-manager')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-img"></em></span>

                            <span class="nk-menu-text">Media Manager</span>

                        </a>

                    </li>

                    <li class="nk-menu-item">

                        <a href="{{route('banner.index')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-img"></em></span>

                            <span class="nk-menu-text">Banners</span>

                        </a>

                    </li>

                    {{-- <li class="nk-menu-item">

                        <a href="{{url('admin/area')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-img"></em></span>

                            <span class="nk-menu-text">Area</span>

                        </a>

                    </li> --}}



                    <li class="nk-menu-heading">

                        <h6 class="overline-title text-primary-alt">Shop</h6>

                    </li>



                    <li class="nk-menu-item">

                        <a href="{{route('category.index')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-dot-box-fill"></em></span>

                            <span class="nk-menu-text">Category</span>

                        </a>

                    </li>

                    <li class="nk-menu-item">

                        <a href="{{route('product.index')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>

                            <span class="nk-menu-text">Products</span>

                        </a>

                    </li>

                    <li class="nk-menu-item">

                        <a href="{{route('shipping.index')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-truck"></em></span>

                            <span class="nk-menu-text">Shipping</span>

                        </a>

                    </li>

                    <li class="nk-menu-item">

                        <a href="{{route('order.index')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2-fill"></em></span>

                            <span class="nk-menu-text">Orders</span>

                        </a>

                    </li>

                    <li class="nk-menu-item">

                        <a href="{{route('errororder')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2-fill"></em></span>

                            <span class="nk-menu-text">Incomplete/Faulty Orders</span>

                        </a>

                    </li>



                    <li class="nk-menu-heading">

                        <h6 class="overline-title text-primary-alt">General Settings</h6>

                    </li>



                    <li class="nk-menu-item">

                        <a href="{{route('coupon.index')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-offer-fill"></em></span>

                            <span class="nk-menu-text">Coupon</span>

                        </a>

                    </li>

                    <li class="nk-menu-item">

                        <a href="{{route('message.index')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-emails"></em></span>

                            <span class="nk-menu-text">Message Center</span>

                        </a>

                    </li>

                    <li class="nk-menu-item">

                        <a href="{{route('users.index')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>

                            <span class="nk-menu-text">Users</span>

                        </a>

                    </li>

                    <li class="nk-menu-item">

                        <a href="{{route('settings')}}" class="nk-menu-link">

                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>

                            <span class="nk-menu-text">Settings</span>

                        </a>

                    </li>
                    <li class="nk-menu-item">

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                       <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <span class="nk-menu-text overline-title text-primary-alt">  Sales Report</span>
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"> 
                            <ul>
                                <li>
                                    <a href="{{route('product-report')}}" class="nk-menu-link">

                                    <span class="nk-menu-text">Highest Product Sel</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('order-report')}}" class="nk-menu-link">

                                    <span class="nk-menu-text">Order Report</span>

                                    </a>
                                </li>
                            </ul>
                            </div>
                            </div>
                        </div>
                    </div>

                        

                    </li>

                    <li class="nk-menu-item">

                        <a class="nk-menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();

                                document.getElementById('logout-form').submit();">

                            <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>

                            <span class="nk-menu-text">Logout</span>

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                            @csrf

                        </form>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

