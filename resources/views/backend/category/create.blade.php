@extends('backend.layouts.master')

@section('title','Bahja | Banner Create')

@section('main-content')

    <div class="nk-content ">

        <div class="container-fluid">

            <div class="nk-content-inner">

                <div class="nk-content-body">

                    <div class="components-preview wide-md mx-auto">

                        <div class="nk-block-head nk-block-head-lg wide-sm">

                            <div class="nk-block-head-content">

                                <div class="nk-block-head-sub"><a class="back-to" href="{{route('category.index')}}">

                                        <em class="icon ni ni-arrow-left"></em>

                                        <span>Back</span>

                                    </a>

                                </div>

                                <h2 class="nk-block-title fw-normal">Add Category</h2>

                            </div>

                        </div><!-- .nk-block -->

                        <div class="nk-block nk-block-lg">

                            <div class="row g-gs">

                                <div class="col-lg-12">

                                    <div class="card h-100">

                                        <div class="float-end mt-1 translation-lang">

                                            <div class="custom-control custom-control-sm custom-radio custom-control-pro" style="margin-left: 0px">

                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">

                                                <label class="custom-control-label" for="customSwitch1">

                                                    <em class="icon icon-lg ni ni-tranx-fill"></em>

                                                    <span class="english-title" style="font-size: 20px; font-weight: bold">English</span>

                                                    <span class="arabic-title" style="font-size: 20px; font-weight: bold"  >Arabic</span>

                                                </label>

                                            </div>

                                        </div>

                                        <div class="card-inner">

                                            <form action="{{route('category.store')}}" method="post">

                                                @csrf

                                                <div class="form-group english-lan">

                                                    <label class="form-label" for="Title">Title (English) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control @error('title') error @enderror" name="title" id="Title" value="{{old('title')}}">

                                                        @error('title')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group arabic-lan">

                                                    <label class="form-label" for="Title_ar">Title (Arabic) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control @error('title_ar') error @enderror" name="title_ar" id="Title_ar" value="{{old('title_ar')}}">

                                                        @error('title_ar')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group english-lan">

                                                    <label class="form-label" for="Descriptions">Description (optional) (English)</label>

                                                    <div class="form-control-wrap">

                                                        <textarea class="form-control no-resize @error('summary') error @enderror" name="summary" id="Descriptions">

                                                            {{old('summary')}}

                                                        </textarea>

                                                        @error('summary')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group arabic-lan">

                                                    <label class="form-label" for="Descriptions_ar">Description (optional) (Arabic)</label>

                                                    <div class="form-control-wrap">

                                                        <textarea class="form-control no-resize @error('summary_ar') error @enderror" name="summary_ar" id="Descriptions_ar">

                                                            {{old('summary_ar')}}

                                                        </textarea>

                                                        @error('summary_ar')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="custom-control custom-checkbox">

                                                    <input type="checkbox"  name="is_parent" class="custom-control-input" id="is_parent" checked value='1'>

                                                    <label class="custom-control-label" for="is_parent">Is Parent</label>

                                                </div>

                                                <div class="form-group d-none mt-3" id='parent_cat_div'>

                                                    <label for="parent_id">Parent Category</label>

                                                    <select name="parent_id" class="form-control">

                                                        <option value="">--Select any category--</option>

                                                        @foreach($parent_cats as $key=>$parent_cat)

                                                            <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>

                                                        @endforeach

                                                    </select>

                                                </div>

                                                <div class="form-group">

                                                    <label for="inputPhoto" class="col-form-label">Photo (Select Only One)<span class="text-danger">*</span></label>

                                                    <div class="input-group">

                                                        <span class="input-group-btn">

                                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">

                                                            <i class="fa fa-picture-o"></i> Choose

                                                            </a>

                                                        </span>

                                                        <input id="thumbnail" class="form-control @error('photo') error @enderror" type="text" name="photo" value="{{old('photo')}}">

                                                    </div>

                                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                                                    @error('photo')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                </div>

                                                <div class="form-group">

                                                    <label class="form-label" for="status">Status <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <div class="form-control-select">

                                                            <select class="form-control form-select-lg" id="default-06" name="status">

                                                                <option value="active">Active</option>

                                                                <option value="inactive">Inactive</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                    @error('status')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                </div>

                                                <div class="form-group">

                                                <label class="form-label" for="status">Show In Home Page <span class="text-danger">*</span></label>

                                                <div class="form-control-wrap">

                                                    <div class="form-control-select">

                                                        <select class="form-control form-select-lg" id="default-06" name="category_show">

                                                            <option value="yes">Yes</option>

                                                            <option value="no">No</option>

                                                        </select>

                                                    </div>

                                                </div>

                                                @error('category_show')

                                                    <span class="text-danger">{{$message}}</span>

                                                @enderror

                                                </div>

                                                <div class="form-group mb-3">

                                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>

                                                    <button type="reset" class="btn btn-lg btn-light">Reset</button>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div><!-- .nk-block -->

                    </div><!-- .components-preview -->

                </div>

            </div>

        </div>

    </div>

@endsection



@push('styles')

    <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">

@endpush

@push('scripts')

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>

    <script>

        $('#lfm').filemanager('image');

    </script>

    <script>

        $('#is_parent').change(function(){

            var is_checked=$('#is_parent').prop('checked');

            // alert(is_checked);

            if(is_checked){

                $('#parent_cat_div').addClass('d-none');

                $('#parent_cat_div').val('');

            }

            else{

                $('#parent_cat_div').removeClass('d-none');

            }

        })

    </script>

@endpush

