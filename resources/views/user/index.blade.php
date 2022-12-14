@extends('user.layouts.master')

@section('title','Bahja | Orders')

@section('main-content')

    <section class="inner-page">

        <section class="shopping-cart">

            <div class="container">

                <div class="row">

                    <div class="col-12 page-head">

                        <h2 class="mb-3 mt-4 ">{{__('Orders')}}</h2>

                    </div>

                </div>

                <div class="row account-cont">

                    @include('user.layouts.sidebar')

                    <div class="col-lg-8 col-xl-9 account-right">

                        <table class="table table-borderless table-hover table-responsive-md bg-light orders-table">

                            <thead>

                            <tr>

                                <th class="py-4 text-uppercase text-sm">{{__('Order')}} #</th>

                                <th class="py-4 text-uppercase text-sm">{{__('Date')}}</th>

                                <th class="py-4 text-uppercase text-sm">{{__('Total')}}</th>

                                <th class="py-4 text-uppercase text-sm">{{__('Status')}}</th>

                                <th class="py-4 text-uppercase text-sm">{{__('Action')}}</th>

                            </tr>

                            </thead>

                            <tbody>

                            @php

                                $orders=DB::table('orders')->where('user_id',auth()->user()->id)->paginate(10);

                            @endphp

                            @if(count($orders)>0)

                                @foreach($orders as $order)

                                    <tr>

                                    <th class="py-4 align-middle"><a href="{{route('user.order.show',$order->id)}}"># {{$order->order_number}}</a></th>

                                    <td class="py-4 align-middle">{{date('j F, Y', strtotime($order->created_at))}}</td>

                                    <td class="py-4 align-middle">KWD {{number_format($order->total_amount,3)}}</td>

                                    <td class="py-4 align-middle">

                                        @if($order->status=='new')

                                            <span class="badge p-2 text-uppercase badge-info">{{$order->status}}</span>

                                        @elseif($order->status=='process')

                                            <span class="badge p-2 text-uppercase badge-warning">{{$order->status}}</span>

                                        @elseif($order->status=='delivered')

                                            <span class="badge p-2 text-uppercase badge-success">{{$order->status}}</span>

                                        @else

                                            <span class="badge p-2 text-uppercase badge-danger">{{$order->status}}</span>

                                        @endif

                                    </td>

                                    <td class="py-4 align-middle">

                                        <a class="btn btn-outline-dark btn-sm invoice-btn" href="{{route('user.order.show',$order->id)}}">

                                            {{__('View')}}

                                        </a>

                                    </td>

                                </tr>

                                @endforeach

                            @else

                                <td colspan="8" class="text-center">

                                    <h4 class="my-4">

                                        {{__('You have no order yet!! Please order some products')}}

                                    </h4>

                                </td>

                            @endif

                            </tbody>

                        </table>

                        <span>{{$orders->links()}}</span>

                    </div>

                </div>

            </div>

        </section>

    </section>

@endsection



