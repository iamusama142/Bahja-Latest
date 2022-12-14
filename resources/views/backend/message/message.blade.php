<a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
    <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
</a>
<div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
    <div class="dropdown-head">
        <span class="sub-title nk-dropdown-title">Message Center</span>
    </div>
    <div class="dropdown-body">
        <ul class="chat-list">
            @foreach(Helper::messageList() as $message)
                <li class="chat-item">
                    <a class="chat-link" href="{{route('message.show',$message->id)}}">
                        <div class="chat-media user-avatar">
                            @if($message->photo)
                                <img src="{{$message->photo}}" alt="">
                            @else
                                <img class="rounded-circle" src="{{asset('backend/img/avatar.png')}}" alt="default img">
                            @endif
                        </div>
                        <div class="chat-info">
                            <div class="chat-from">
                                <div class="name">{{$message->name}}</div>
                                <span class="time">{{$message->created_at->diffForHumans()}}</span>
                            </div>
                            <div class="chat-context">
                                <div class="text">{{$message->subject}}</div>
                            </div>
                        </div>
                    </a>
                </li>
                @if($loop->index+1==5)
                    @php
                        break;
                    @endphp
                @endif
            @endforeach
        </ul><!-- .chat-list -->
    </div><!-- .nk-dropdown-body -->
    <div class="dropdown-foot center">
        <a href="{{route('message.index')}}">View All</a>
    </div>
</div>

