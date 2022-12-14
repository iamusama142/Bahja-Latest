@extends('backend.layouts.master')

@section('title','Bahja | Banner')

@section('main-content')

    <div class="nk-content ">

        <div class="container-fluid">

            <div class="nk-content-inner">

                <div class="nk-content-body">

                    <div class="nk-block-head nk-block-head-sm">

                        <div class="nk-block-between">

                            <div class="nk-block-head-content">

                                <h3 class="nk-block-title page-title">Shipping List</h3>

                            </div><!-- .nk-block-head-content -->

                            <div class="nk-block-head-content">

                                <div class="toggle-wrap nk-block-tools-toggle">

                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>

                                    <div class="toggle-expand-content" data-content="pageMenu">

                                        <ul class="nk-block-tools g-3">

                                            <li class="nk-block-tools-opt">

                                                <a href="{{route('shipping.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>

                                                <a href="{{route('shipping.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Shipping</span></a>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->

                    </div><!-- .nk-block-head -->

                    @if(count($shippings)>0)

                        <div class="nk-block">

                            <div class="nk-tb-list is-separate mb-3">

                                <div class="nk-tb-item nk-tb-head">

                                    <div class="nk-tb-col"><span>S.N.</span></div>

                                    <div class="nk-tb-col"><span>Shipping Area</span></div>

                                    <div class="nk-tb-col"><span>Shipping Cost</span></div>

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
                                @php
                                $page_offset = ($shippings->currentPage()-1) * 10;
                                @endphp


                                @foreach($shippings as $shipping)

                                    <div class="nk-tb-item">

                                        <div class="nk-tb-col">

                                            <span class="tb-sub"><a href="{{route('shipping.edit',$shipping->id)}}" title="Edit">#{{$loop->iteration + $page_offset}}</a></span>

                                        </div>



                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$shipping->type}}</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$shipping->price}} KWD</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <td>

                                                @if($shipping->status=='active')

                                                    <span class="dot bg-success d-sm-none"></span>

                                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex">{{$shipping->status}}</span>

                                                @else

                                                    <span class="dot bg-warning d-sm-none"></span>

                                                    <span class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex">{{$shipping->status}}</span>

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

                                                                <li><a href="{{route('shipping.edit',$shipping->id)}}"><em class="icon ni ni-edit"></em><span>Edit shipping</span></a></li>

                                                                <li>

                                                                    <form method="POST" action="{{route('shipping.destroy',[$shipping->id])}}">

                                                                        @csrf

                                                                        <a href="#" class="dltBtn" data-id="{{$shipping->id}}">

                                                                            <em class="icon ni ni-trash"></em><span>Delete shipping</span>

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

                                                    <span>{{$shippings->links()}}</span>

                                                </div>

                                            </div>

                                        </div><!-- .pagination-goto -->

                                    </div><!-- .nk-block-between -->

                                </div>

                            </div>

                        </div><!-- .nk-block -->

                    @else

                        <h6 class="text-center">No banners found!!! Please create banner</h6>

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

@endpush



@section('main-contentX')

 <!-- DataTales Example -->

 <div class="card shadow mb-4">

     <div class="row">

         <div class="col-md-12">

            @include('backend.layouts.notification')

         </div>

     </div>

    <div class="card-header py-3">

      <h6 class="m-0 font-weight-bold text-primary float-left">Shipping List</h6>

      <a href="{{route('shipping.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Shipping</a>

    </div>

    <div class="card-body">

      <div class="table-responsive">

        @if(count($shippings)>0)

        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">

          <thead>

            <tr>

              <th>S.N.</th>

              <th>Title</th>

              <th>Price</th>

              <th>Status</th>

              <th>Action</th>

            </tr>

          </thead>

          <tfoot>

            <tr>

              <th>S.N.</th>

              <th>Title</th>

              <th>Price</th>

              <th>Status</th>

              <th>Action</th>

              </tr>

          </tfoot>

          <tbody>

            @foreach($shippings as $shipping)

                <tr>

                    <td>{{$shipping->id}}</td>

                    <td>{{$shipping->type}}</td>

                    <td>${{$shipping->price}}</td>

                    <td>

                        @if($shipping->status=='active')

                            <span class="badge badge-success">{{$shipping->status}}</span>

                        @else

                            <span class="badge badge-warning">{{$shipping->status}}</span>

                        @endif

                    </td>

                    <td>

                        <a href="{{route('shipping.edit',$shipping->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>

                        <form method="POST" action="{{route('shipping.destroy',[$shipping->id])}}">

                          @csrf

                          @method('delete')

                              <button class="btn btn-danger btn-sm dltBtn" data-id={{$shipping->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>

                        </form>

                    </td>

                    {{-- Delete Modal --}}

                    {{-- <div class="modal fade" id="delModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="#delModal{{$user->id}}Label" aria-hidden="true">

                        <div class="modal-dialog" role="document">

                          <div class="modal-content">

                            <div class="modal-header">

                              <h5 class="modal-title" id="#delModal{{$user->id}}Label">Delete user</h5>

                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                              </button>

                            </div>

                            <div class="modal-body">

                              <form method="post" action="{{ route('banners.destroy',$user->id) }}">

                                @csrf

                                @method('delete')

                                <button type="submit" class="btn btn-danger" style="margin:auto; text-align:center">Parmanent delete user</button>

                              </form>

                            </div>

                          </div>

                        </div>

                    </div> --}}

                </tr>

            @endforeach

          </tbody>

        </table>

        <span style="float:right">{{$shippings->links()}}</span>

        @else

          <h6 class="text-center">No shippings found!!! Please create shipping</h6>

        @endif

      </div>

    </div>

</div>

@endsection

