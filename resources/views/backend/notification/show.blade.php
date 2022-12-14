<a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
    @if(count(Auth::user()->unreadNotifications))
        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
    @else
        <div class="icon-status icon-status-info not-active"><em class="icon ni ni-bell"></em></div>
    @endif

</a>
<div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
    <div class="dropdown-head">
        <span class="sub-title nk-dropdown-title">Notifications</span>
    </div>
    <div class="dropdown-body">
        <div class="nk-notification">
            @foreach(Auth::user()->unreadNotifications as $notification)
                <div class="nk-notification-item dropdown-inner">
                    <div class="nk-notification-icon">
                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                    </div>
                    <div class="nk-notification-content">
                        <div class="nk-notification-text"> <span class="@if($notification->unread()) font-weight-bold @else small text-gray-500 @endif">{{$notification->data['title']}}</span></div>
                        <div class="nk-notification-time">{{$notification->created_at->format('F d, Y h:i A')}}</div>
                    </div>
                </div>
                @if($loop->index+1==5)
                    @php
                        break;
                    @endphp
                @endif
            @endforeach
        </div><!-- .nk-notification -->
    </div><!-- .nk-dropdown-body -->
    <div class="dropdown-foot center">
        <a href="{{route('all.notification')}}">View All</a>
    </div>
</div>

