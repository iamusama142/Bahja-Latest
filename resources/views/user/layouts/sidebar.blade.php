<div class="col-xl-3 col-lg-4 mb-5">
    <div class="customer-sidebar card ">
        <div class="customer-profile">
            <h5> {{Auth()->user()->name}}</h5>
            <p class="text-muted text-sm mb-0">{{Auth()->user()->email}}</p>
            <p class="text-muted text-sm mt-2">{{Auth()->user()->phone}}</p>
            <div id="showmenu">
                <div id="nav-icon2">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <nav class="list-group customer-nav account-menu">
            <a class="list-group-item d-flex justify-content-between align-items-center {{Request::path()=='user' ? 'active' : ''}}"
               href="{{route('user')}}">
                    <span>
                      <svg class="bi svg-icon">
                        <use xlink:href="{{asset('frontend/assets/images/bootstrap-icons.svg#bag-check')}}"/>
                      </svg>
                       {{__('Orders')}}
                    </span>
                @php
                    $totalOrder=DB::table('orders')->where('user_id', Auth()->user()->id)->count();
                @endphp
                <div class="badge badge-pill badge-dark font-weight-normal px-3">{{$totalOrder}}</div>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center {{Request::path()=='user/profile' ? 'active' : ''}}"
               href="{{route('user-profile')}}">
                <span>
                    <svg class="bi svg-icon">
                      <use xlink:href="{{asset('frontend/assets/images/bootstrap-icons.svg#person')}}"/>
                    </svg>
                    {{__('Profile')}}
                </span>
            </a>

            <a class="list-group-item d-flex justify-content-between align-items-center {{Request::path()=='user/address' ? 'active' : '' }} {{Request::path()=='user/address/create' ? 'active' : '' }}" href="{{route('address.index')}}">
                <span>
                      <svg class="bi svg-icon">
                        <use xlink:href="{{asset('frontend/assets/images/bootstrap-icons.svg#house')}}"/>
                      </svg>
                      {{__('Addresses')}}
                </span>
            </a>

            <a class="list-group-item d-flex justify-content-between align-items-center {{Request::path()=='user/change-password' ? 'active' : '' }}"
               href="{{route('user.change.password.form')}}"><span>
                                <svg class="bi svg-icon">
                                  <use xlink:href="{{asset('frontend/assets/images/bootstrap-icons.svg#lock')}}"/>
                                </svg>
                    {{__('Change Password')}}
                </span>
            </a>

            <a class="list-group-item d-flex justify-content-between align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                <span><i class="fa fa-sign-in" aria-hidden="true"></i>{{ __('Logout') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
</div>
