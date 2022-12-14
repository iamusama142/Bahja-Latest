@extends('backend.layouts.master')

@section('title','Bahja | Category')

@section('main-content')

    <div class="nk-content ">

        <div class="container-fluid">

            <div class="nk-content-inner">

                <div class="nk-content-body">

                    <div class="nk-block-head nk-block-head-sm">

                        <div class="nk-block-between">

                            <div class="nk-block-head-content">

                                <h3 class="nk-block-title page-title">Category</h3>

                            </div><!-- .nk-block-head-content -->

                            <div class="nk-block-head-content">

                                <div class="toggle-wrap nk-block-tools-toggle">

                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>

                                    <div class="toggle-expand-content" data-content="pageMenu">

                                        <ul class="nk-block-tools g-3">

                                            <li class="nk-block-tools-opt">

                                                <a href="{{route('category.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>

                                                <a href="{{route('category.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Category</span></a>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->

                    </div><!-- .nk-block-head -->

                    @if(count($categories)>0)

                        <div class="nk-block">

                            <div class="nk-tb-list is-separate mb-3">

                                <div class="nk-tb-item nk-tb-head">

                                    <div class="nk-tb-col"><span>S.N.</span></div>

                                    <div class="nk-tb-col"><span>Category Name</span></div>

                                    {{-- <div class="nk-tb-col"><span>Slug</span></div> --}}

                                    {{-- <div class="nk-tb-col"><span>Is Parent</span></div> --}}

                                    <div class="nk-tb-col"><span>Main Category</span></div>

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
                                $page_offset = ($categories->currentPage()-1) * 10;
                                @endphp


                                @foreach($categories as $category)

                                    <div class="nk-tb-item">

                                        <div class="nk-tb-col">

                                            <span class="tb-sub"><a href="{{route('category.edit',$category->id)}}" title="Edit">#{{$loop->iteration + $page_offset}}</a></span>

                                        </div>

                                        <div class="nk-tb-col tb-col-sm">

                                            <span class="tb-product">

                                                 @if($category->photo)

                                                    <img src="{{$category->photo}}" alt="{{$category->title}}" class="thumb">

                                                @else

                                                    <img src="{{asset('backend/img/thumbnail-default.jpg')}}" alt="default Img" class="thumb">

                                                @endif



                                                <span class="title">{{$category->title}}</span>

                                            </span>

                                        </div>

                                        {{-- <div class="nk-tb-col">

                                            <span class="tb-sub">{{$category->slug}}</span>

                                        </div> --}}

                                        {{-- <div class="nk-tb-col">

                                            <span class="tb-sub">{{(($category->is_parent==1)? 'Yes': 'No')}}</span>

                                        </div> --}}

                                        <div class="nk-tb-col">

                                            <span class="tb-sub">{{$category->parent_info->title ?? ''}}</span>

                                        </div>

                                        <div class="nk-tb-col">

                                            <td>

                                                @if($category->status=='active')

                                                    <span class="dot bg-success d-sm-none"></span>

                                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex">{{$category->status}}</span>

                                                @else

                                                    <span class="dot bg-warning d-sm-none"></span>

                                                    <span class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex">{{$category->status}}</span>

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

                                                                <li><a href="{{route('category.edit',$category->id)}}"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>

                                                                <li>

                                                                    <form method="POST" action="{{route('category.destroy',[$category->id])}}">

                                                                        @csrf

                                                                        @method('delete')

                                                                        <a href="#" class="dltBtn" data-id="{{$category->id}}">

                                                                            <em class="icon ni ni-trash"></em><span>Delete Category</span>

                                                                        </a>

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

                                                    <span>{{$categories->links()}}</span>

                                                </div>

                                            </div>

                                        </div><!-- .pagination-goto -->

                                    </div><!-- .nk-block-between -->

                                </div>

                            </div>

                        </div><!-- .nk-block -->

                    @else

                        <h6 class="text-center">No category found!!! Please create category</h6>

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



