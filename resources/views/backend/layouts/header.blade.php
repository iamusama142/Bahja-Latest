<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{route('admin')}}" class="logo-link">
                    <img class="logo-light logo-img" src="{{asset('frontend/assets/images/logo.svg')}}"   alt="logo">
                    <img class="logo-dark logo-img" src="{{asset('frontend/assets/images/logo.svg')}}"   alt="logo-dark">
                </a>
            </div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown chats-dropdown hide-mb-xs">
                        @include('backend.message.message')
                    </li>
                    <li class="dropdown notification-dropdown">
                        @include('backend.notification.show')
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-active">Administator</div>
                                    <div class="user-name dropdown-indicator">{{Auth()->user()->name}}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        @if(Auth()->user()->photo)
                                            <img class="img-profile rounded-circle" src="{{Auth()->user()->photo}}">
                                        @else
                                            <img class="img-profile rounded-circle" src="{{asset('backend/img/avatar.png')}}">
                                        @endif
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{Auth()->user()->name}}</span>
                                        <span class="sub-text">{{Auth()->user()->email}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{route('admin-profile')}}"><em class="icon ni ni-user-alt"></em><span>Profile</span></a></li>
                                    <li><a href="{{route('change.password.form')}}"><em class="icon ni ni-user-alt"></em><span>Change Password</span></a></li>
                                    <li><a href="{{route('settings')}}"><em class="icon ni ni-user-alt"></em><span>Settings</span></a></li>
                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>{{ __('Logout') }}</span></a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
