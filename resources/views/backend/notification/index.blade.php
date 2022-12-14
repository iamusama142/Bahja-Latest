@extends('backend.layouts.master')
@section('title','Bahja | Notification')
@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Notification</h3>
                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->

                        <div class="nk-block">
                            <div class="nk-tb-list is-separate mb-3">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col"><span>S.N.</span></div>
                                    <div class="nk-tb-col"><span>Time</span></div>
                                    <div class="nk-tb-col"><span>Title</span></div>
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
                                @foreach ( Auth::user()->Notifications as $notification)
                                    <div class="nk-tb-item @if($notification->unread()) bg-light border-left-light @else border-left-success @endif">
                                        <div class="nk-tb-col">
                                            <span class="tb-sub">{{$loop->index +1}}</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub">{{$notification->created_at->format('F d, Y h:i A')}}</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub">{{$notification->data['title']}}</span>
                                        </div>

                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                           data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="{{route('admin.notification',$notification->id)}}"><em class="icon ni ni-eye"></em><span>show Notification</span></a></li>
                                                                <li>
                                                                    <form method="POST" action="{{ route('notification.delete', $notification->id) }}">
                                                                        @csrf
                                                                        <a href="#" class="dltBtn" data-id="{{$notification->id}}">
                                                                            <em class="icon ni ni-trash"></em><span>Delete Notification</span>
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
{{--                                                    <span>{{$brands->links()}}</span>--}}
                                                </div>
                                            </div>
                                        </div><!-- .pagination-goto -->
                                    </div><!-- .nk-block-between -->
                                </div>
                            </div>
                        </div><!-- .nk-block -->

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



