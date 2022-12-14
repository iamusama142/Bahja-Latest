@extends('backend.layouts.master')

@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Message</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-12 col-lg-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        @if($message)
                                            @if($message->photo)
                                                <img src="{{$message->photo}}" class="rounded-circle " style="margin-left:44%;">
                                            @else
                                                <img src="{{asset('backend/img/avatar.png')}}" class="rounded-circle " style="margin-left:44%;">
                                            @endif
                                            <div class="py-4">From: <br>
                                                Name : {{$message->name}}<br>
                                                Email : {{$message->email}}<br>
                                                Phone : {{$message->phone}}
                                            </div>
                                            <hr/>
                                            <h5 class="text-center"><strong>Subject :</strong> {{$message->subject}}</h5>
                                            <p class="py-5">{{$message->message}}</p>

                                        @endif

                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
