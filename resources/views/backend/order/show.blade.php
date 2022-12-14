@extends('backend.layouts.master')

@section('title','Bahja | Order Show')

@section('main-content')

    <div class="nk-content ">

        <div class="container-fluid">

            <div class="nk-content-inner">

                <div class="nk-content-body">

                    <div class="nk-block-head nk-block-head-sm">

                        <div class="nk-block-between">

                            <div class="nk-block-head-content">

                                <h3 class="nk-block-title page-title">Order # {{ $order->order_number  }}</h3>

                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->

                    </div><!-- .nk-block-head -->

                    @if($order)

                        <div class="nk-block">

                            <div class="nk-tb-list is-separate mb-3">

                                <div class="nk-tb-item nk-tb-head">

                                    <div class="nk-tb-col"><span>S.N.</span></div>

                                    <div class="nk-tb-col"><span>Order No.</span></div>

                                    <div class="nk-tb-col"><span>Name</span></div>

                                    <div class="nk-tb-col"><span>Email</span></div>

                                    <div class="nk-tb-col"><span>Items</span></div>

                                    <div class="nk-tb-col"><span>Shipping Charge</span></div>

                                    <div class="nk-tb-col"><span>Total Amount</span></div>

                                    <div class="nk-tb-col"><span>Status</span></div>

                                    <div class="nk-tb-col nk-tb-col-tools">

                                        <ul class="nk-tb-actions gx-1 my-n1">

                                            <li class="me-n1">

                                                <div class="dropdown">

                                                    <a href="#" class="btn btn-icon btn-trigger"><em class="icon ni ni-more-h"></em></a>

                                                </div>

                                            </li>

                                        </ul>

                                    </div>

                                </div><!-- .nk-tb-item -->



                                    <div class="nk-tb-item">

                                        <div class="nk-tb-col">

                                            <span class="tb-sub"><a href="{{route('order.edit',$order->id)}}" title="Edit">#{{$order->id}}</a></span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{ $order->order_number  }}</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$order->first_name}} {{$order->last_name}}</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$order->email}} </span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$order->quantity}} </span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{($order->shipping) ? $order->shipping->price:''}} KWD</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$order->total_amount}} KWD</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <td>

                                                @if($order->status=='new')

                                                    <span class="dot bg-primary d-sm-none"></span>

                                                    <span class="badge badge-sm badge-dot has-bg bg-primary d-none d-sm-inline-flex">{{$order->status}}</span>

                                                @elseif($order->status=='process')

                                                    <span class="dot bg-warning d-sm-none"></span>

                                                    <span class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex">{{$order->status}}</span>

                                                @elseif($order->status=='delivered')

                                                    <span class="dot bg-success d-sm-none"></span>

                                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex">{{$order->status}}</span>

                                                @else

                                                    <span class="dot bg-danger d-sm-none"></span>

                                                    <span class="badge badge-sm badge-dot has-bg bg-danger d-none d-sm-inline-flex">{{$order->status}}</span>

                                                @endif

                                            </td>

                                        </div>

                                        <div class="nk-tb-col nk-tb-col-tools">

                                            <ul class="nk-tb-actions gx-1 my-n1">

                                                <li class="me-n1">

                                                    <div class="dropdown">

                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"

                                                           data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>

                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <ul class="link-list-opt no-bdr">

                                                                <li><a href="{{route('order.edit',$order->id)}}"><em class="icon ni ni-edit"></em><span>Edit Order</span></a></li>

                                                                <li>

                                                                    <form method="POST" action="{{route('order.destroy',[$order->id])}}">

                                                                        @csrf

                                                                        <a href="#" class="dltBtn" data-id="{{$order->id}}">

                                                                            <em class="icon ni ni-trash"></em><span>Delete Order</span>

                                                                        </a>

                                                                        @method('delete')

                                                                    </form>

                                                                </li>

                                                            </ul>

                                                        </div>

                                                    </div>

                                                </li>

                                            </ul>

                                        </div>

                                    </div><!-- .nk-tb-item -->



                            </div><!-- .nk-tb-list -->



                            <div class="card">

                                <div class="card-inner">
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <button class="btn btn-dark btn-sm float-end" onClick="printReport('order-information-div')">Print Information</button>
                                            {{-- <a href="/print-patient/{{ $data->id }}"
                                                class="btn btn-danger">Print</a> --}}
                                        </div>
                                    </div>

                                    <div class="">

                                        <div class="row" id="order-information-div">

                                            <div class="col-lg-6 col-lx-4">

                                                <div class="order-info">

                                                    <h4 class="text-center pb-4">ORDER INFORMATION</h4>

                                                    <table class="table">

                                                        <tr class="">

                                                            <td>Order Number</td>

                                                            <td> : {{$order->order_number}}</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Order Date</td>

                                                            <td> : {{$order->created_at->format('D d-M-Y')}} at {{$order->created_at->format('g : i a')}} </td>

                                                        </tr>

                                                        <tr>

                                                            <td>Items</td>

                                                            <td> : {{$order->quantity}}</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Order Status</td>

                                                            @if($order->status=='new')

                                                                <td>

                                                                    <span class="dot bg-primary d-sm-none"></span>

                                                                    <span class="badge badge-sm badge-dot has-bg bg-primary d-none d-sm-inline-flex">{{$order->status}}</span>

                                                                </td>

                                                            @elseif($order->status=='process')

                                                                <td>

                                                                    <span class="dot bg-warning d-sm-none"></span>

                                                                    <span class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex">{{$order->status}}</span>

                                                                </td>

                                                            @elseif($order->status=='delivered')

                                                                <td>

                                                                    <span class="dot bg-success d-sm-none"></span>

                                                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex">{{$order->status}}</span>

                                                                </td>

                                                            @else

                                                                <td>

                                                                    <span class="dot bg-danger d-sm-none"></span>

                                                                    <span class="badge badge-sm badge-dot has-bg bg-danger d-none d-sm-inline-flex">{{$order->status}}</span>

                                                                </td>

                                                            @endif



                                                        </tr>

                                                        <tr>

                                                            <td>Shipping Charge</td>

                                                            <td> : {{($order->shipping) ? $order->shipping->price:'0.000'}} KWD</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Coupon Discount</td>

                                                            <td> : {{ $order->coupon }} KWD</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Total Amount</td>

                                                            <td> : {{$order->total_amount}} KWD</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Payment Method</td>

                                                            <td> : @if($order->payment_method=='knet') knet @elseif($order->payment_method=='card') card @endif</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Payment Status</td>

                                                            <td> :

                                                                @if($order->payment_status == 'paid')

                                                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex">{{$order->payment_status}}</span>

                                                                @else

                                                                    <span class="badge badge-sm badge-dot has-bg bg-danger d-none d-sm-inline-flex">{{$order->payment_status}}</span>

                                                                @endif

                                                            </td>

                                                        </tr>

                                                    </table>

                                                </div>

                                            </div>



                                            <div class="col-lg-6 col-lx-4">

                                                <div class="shipping-info">

                                                    <h4 class="text-center pb-4">SHIPPING INFORMATION</h4>

                                                    <table class="table">

                                                        <tr class="">

                                                            <td>Full Name</td>

                                                            <td> : {{$order->first_name}} {{$order->last_name}}</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Email</td>

                                                            <td> : {{$order->email}}</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Phone No.</td>

                                                            <td> : {{$order->phone}}</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Address</td>

                                                            <td> : {{$order->address1}} {{$order->address2}}</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Country</td>

                                                            <td> : Kuwait</td>

                                                        </tr>

                                                    </table>

                                                </div>

                                            </div>

                                           

                                        </div>

                                    </div><!-- .nk-block-between -->

                                </div>

                            </div>

                        </div><!-- .nk-block -->



                        <div class="nk-block-head-content mt-3 mb-3">

                            <h3 class="nk-block-title page-title">Product Order Detail</h3>

                        </div>

                        <div class="nk-tb-list is-separate mb-3">

                            <div class="nk-tb-item nk-tb-head">

                                <div class="nk-tb-col"><span>PRODUCT</span></div>

                                <div class="nk-tb-col"><span>UNIT PRICE</span></div>

                                <div class="nk-tb-col"><span>QUANTITY</span></div>

                                <div class="nk-tb-col"><span>TOTAL</span></div>

                            </div><!-- .nk-tb-item -->

                            @foreach(Helper::getAllProductFromCartOrder($order->id) as $key=>$cart)

                                <div class="nk-tb-item">

                                    <div class="nk-tb-col tb-col-sm">

                                       <span class="tb-product">

                                           @php

                                               $photo=explode(',',$cart->product['photo']);

                                           @endphp

                                            <img src="{{$photo[0]}}" alt="" class="thumb">

                                            <span class="title">{{$cart->product['title']}}</span>

                                        </span>

                                    </div>

                                    <div class="nk-tb-col">

                                        <span class="tb-sub">{{$cart['price']}} KWD</span>

                                    </div>

                                    <div class="nk-tb-col">

                                        <span class="tb-sub">{{$cart->quantity}}</span>

                                    </div>

                                    <div class="nk-tb-col">

                                        <span class="tb-sub">{{$cart['amount']}} KWD </span>

                                    </div>

                                </div><!-- .nk-tb-item -->

                            @endforeach

                        </div><!-- .nk-tb-list -->

                    @else

                        <h6 class="text-center">No orders found!!! Please create orders</h6>

                    @endif

                </div>

            </div>

        </div>

    </div>

@endsection

@push('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

@endpush

@push('scripts')

    <script>

        $(document).ready(function(){

            $('.dltBtn').click(function(e){

                var form=$(this).closest('form');

                var dataID=$(this).data('id');

                // alert(dataID);

                e.preventDefault();

                Swal.fire({

                    title: 'Are you sure?',

                    text: "You won't be able to revert this!",

                    icon: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Yes, delete it!'

                }).then((result) => {

                    if (result.isConfirmed) {

                        form.submit();

                        Swal.fire(

                            'Deleted!',

                            'Your file has been deleted.',

                            'success'

                        )

                    }

                })

            })

        })
        function printReport(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}

    </script>

@endpush



