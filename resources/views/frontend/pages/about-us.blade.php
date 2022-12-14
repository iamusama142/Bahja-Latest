@extends('frontend.layouts.master')
@section('title','About Us')
@section('main-content')
    <section class="inner-page mt-0">
        <section class="content-page">
            <div class="inner-banner">
                <div class="banner-head">
                </div>
                <img src="{{asset('frontend/assets/images/banner.jpg')}}">
            </div>
            <section class="container about-cont">
                <div class="row">
                    <div class="col-8">
                        <h2>{{__('About Bahja')}}</h2>
                        <h4>
                            {{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed nisi mollis, tempus
                            diam vel, interdum nibh')}}
                        </h4>
                        <p>
                            {{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed nisi mollis, tempus
                            diam vel, interdum nibh. Sed pellentesque vulputate lacinia. Vivamus pretium nibh et auctor
                            consectetur. Cras eget ligula ullamcorper, pellentesque nisl et, euismod
                            ex. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient
                            montes, nascetur ridiculus mus. Nam egestas sollicitudin sapien at sodales. Cras consectetur
                            finibus magna sit amet mollis. Fusce
                            ullamcorper est in gravida malesuada. Curabitur ac arcu et nunc vestibulum venenatis eu a
                            risus. Mauris magna dui, euismod sit amet turpis aliquet, dapibus congue justo. Nunc eget
                            dui eu ante lobortis vehicula non eget
                            nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id bibendum eros. Aenean
                            consequat, ligula ac mollis efficitur, nisl sem feugiat augue, in condimentum ex neque ac
                            magna. Proin at malesuada est. Etiam
                            tempor massa faucibus, volutpat est eget, imperdiet lectus. In purus augue, molestie at
                            massa vel, efficitur vehicula dolor. Donec tempor lobortis massa, a tincidunt turpis mattis
                            non.')}}</p>
                    </div>
                </div>
            </section>
        </section>
    </section>
@endsection
