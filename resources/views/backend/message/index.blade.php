@extends('backend.layouts.master')

@section('title','Bahja | Message Center')

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

                    @if(count($messages)>0)

                        <div class="nk-block">

                            <div class="nk-tb-list is-separate mb-3">

                                <div class="nk-tb-item nk-tb-head">

                                    <div class="nk-tb-col"><span>ID</span></div>

                                    <div class="nk-tb-col"><span>Name</span></div>

                                    <div class="nk-tb-col"><span>Subject</span></div>

                                    <div class="nk-tb-col"><span>Date</span></div>

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

                                @foreach ( $messages as $message)

                                    <div class="nk-tb-item">

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">

                                                {{$loop->index +1}}

                                            </span>

                                        </div>



                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$message->name}} {{$message->read_at}}</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$message->subject}}</span>

                                        </div>



                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$message->created_at->format('F d, Y h:i A')}}</span>

                                        </div>





                                        <div class="nk-tb-col nk-tb-col-tools">

                                            <ul class="nk-tb-actions gx-1 my-n1">

                                                <li class="me-n1">

                                                    <div class="dropdown">

                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"

                                                           data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>

                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <ul class="link-list-opt no-bdr">

                                                                <li><a href="{{route('message.show',$message->id)}}"><em class="icon ni ni-eye"></em><span>Edit message</span></a></li>

                                                                <li>

                                                                    <form method="POST" action="{{route('message.destroy',[$message->id])}}">

                                                                        @csrf

                                                                        <a href="#" class="dltBtn" data-id="{{$message->id}}">

                                                                            <em class="icon ni ni-trash"></em><span>Delete message</span>

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

                                                    <span>{{$messages->links()}}</span>

                                                </div>

                                            </div>

                                        </div><!-- .pagination-goto -->

                                    </div><!-- .nk-block-between -->

                                </div>

                            </div>

                        </div><!-- .nk-block -->

                    @else

                        <h6 class="text-center">Messages Empty!</h6>

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

