@extends('backend.layouts.master')

@section('title','Bahja | Order')

@section('main-content')

    <div class="nk-content ">

        <div class="container-fluid">

            <div class="nk-content-inner">

                <div class="nk-content-body">

                    <div class="nk-block-head nk-block-head-sm">

                        <div class="nk-block-between">

                            <div class="nk-block-head-content">

                                <h3 class="nk-block-title page-title">Order Lists</h3>

                            </div><!-- .nk-block-head-content -->


                            <div class="nk-block-head-content">

                                <input type="text"  name="search" id="search" class="form-control" placeholder="Search here..." />

                           </div>
                        </div><!-- .nk-block-between -->

                    </div><!-- .nk-block-head -->

                    @if(count($orders)>0)

                        <div class="nk-block" id="orderlist">
                        
                            <div class="nk-tb-list is-separate mb-3"  >

                                <div class="nk-tb-item nk-tb-head" >

                                    <div class="nk-tb-col"><span>S.N.</span></div>

                                    <div class="nk-tb-col"><span>Order No.</span></div>

                                    <div class="nk-tb-col"><span>Name</span></div>

                                    <div class="nk-tb-col"><span>Email</span></div>

                                    <div class="nk-tb-col"><span>Quantity</span></div>

                                    <div class="nk-tb-col"><span>Charge</span></div>

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

                                @foreach($orders as $order)

                                    @php

                                        $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');

                                    @endphp

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

                                            <span class="tb-sub">@foreach($shipping_charge as $data) {{ $data }} KWD @endforeach</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{number_format($order->total_amount,2)}}</span>

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

                                                                <li><a href="{{route('order.show',$order->id)}}"><em class="icon ni ni-eye"></em><span>Show Order</span></a></li>

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

                                @endforeach

                            </div><!-- .nk-tb-list -->



                            <div class="card">

                                <div class="card-inner">

                                    <div class="nk-block-between-md g-3">

                                        <div class="g">

                                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">

                                                <div>

                                                    <span>{{$orders->links()}}</span>

                                                </div>

                                            </div>

                                        </div><!-- .pagination-goto -->

                                    </div><!-- .nk-block-between -->

                                </div>

                            </div>

                        </div><!-- .nk-block -->

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

    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").keydown(function(){
    let search = document.getElementById('search').value;
    
    
    $.ajax({
        url:"{{'live_search'}}",
        type:'GET',
        data:{search:search},
        success:function(data){
           $("#orderlist").html(data);
        
        }
    });
  });

});
</script>

@endpush

