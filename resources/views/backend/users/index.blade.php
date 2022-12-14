@extends('backend.layouts.master')
@section('title','Bahja | Coupon')
@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Users List</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="{{route('users.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a href="{{route('users.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add User</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    @if(count($users)>0)
                        <div class="nk-block">
                            <div class="nk-tb-list is-separate mb-3">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col"><span>S.N.</span></div>
                                    <div class="nk-tb-col"><span>Name</span></div>
                                    <div class="nk-tb-col"><span>Email</span></div>
                                    <div class="nk-tb-col"><span>Join Date</span></div>
                                    <div class="nk-tb-col"><span>Role</span></div>
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
                                @foreach($users as $user)
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span class="tb-sub"><a href="{{route('users.edit',$user->id)}}" title="Edit">#{{$user->id}}</a></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-product">
                                                 @if($user->photo)
                                                    <img src="{{$user->photo}}" alt="{{$user->photo}}" class="thumb">
                                                @else
                                                    <img src="{{asset('backend/img/avatar.png')}}" alt="default Img" class="thumb">
                                                @endif
                                                <span class="title">{{$user->title}}</span>
                                            </span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub">{{$user->email}}</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub">{{(($user->created_at)? $user->created_at->diffForHumans() : '')}}</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub badge badge-sm bg-primary">{{$user->role}}</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <td>
                                                @if($user->status=='active')
                                                    <span class="dot bg-success d-sm-none"></span>
                                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex">{{$user->status}}</span>
                                                @else
                                                    <span class="dot bg-warning d-sm-none"></span>
                                                    <span class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex">{{$user->status}}</span>
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
                                                                <li><a href="{{route('users.edit',$user->id)}}"><em class="icon ni ni-edit"></em><span>Edit User</span></a></li>
                                                                <li>
                                                                    <form method="POST" action="{{route('users.destroy',[$user->id])}}">
                                                                        @csrf
                                                                        <a href="#" class="dltBtn" data-id="{{$user->id}}">
                                                                            <em class="icon ni ni-trash"></em><span>Delete User</span>
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
                                                    <span>{{$users->links()}}</span>
                                                </div>
                                            </div>
                                        </div><!-- .pagination-goto -->
                                    </div><!-- .nk-block-between -->
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    @else
                        <h6 class="text-center">No User found!!! Please create User</h6>
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
