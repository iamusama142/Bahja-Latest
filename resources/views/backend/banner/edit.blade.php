@extends('backend.layouts.master')
@section('title','Bahja | Banner Edit')
@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="{{route('banner.index')}}">
                                        <em class="icon ni ni-arrow-left"></em>
                                        <span>Back</span>
                                    </a>
                                </div>
                                <h2 class="nk-block-title fw-normal">Edit Banner</h2>
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
                                            <form method="post" action="{{route('banner.update',$banner->id)}}">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group english-lan">
                                                    <label class="form-label" for="Title">Title (English)<span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('title') error @enderror" name="title" id="Title" value="{{$banner->title}}" >
                                                        @error('title')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group arabic-lan">
                                                    <label class="form-label" for="Title_ar">Title (Arabic)<span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('title_ar') error @enderror" name="title_ar" id="Title_ar" value="{{$banner->title_ar}}" >
                                                        @error('title_ar')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group english-lan">
                                                    <label class="form-label" for="Descriptions">Description (optional) (English)</label>
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control no-resize @error('description') error @enderror" name="description" id="Descriptions">
                                                            {{$banner->description}}
                                                        </textarea>
                                                        @error('description')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group arabic-lan">
                                                    <label class="form-label" for="Descriptions_ar">Description (optional) (Arabic)</label>
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control no-resize @error('description_ar') error @enderror" name="description_ar" id="Descriptions_ar">
                                                            {{$banner->description_ar}}
                                                        </textarea>
                                                        @error('description_ar')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPhoto" class="col-form-label">Photo (Select Only One)<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                        <input id="thumbnail" class="form-control @error('photo') error @enderror" type="text" name="photo" value="{{$banner->photo}}">
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
                                                                <option value="active" {{(($banner->status=='active') ? 'selected' : '')}}>Active</option>
                                                                <option value="inactive" {{(($banner->status=='inactive') ? 'selected' : '')}}>Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    @error('status')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
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
@endpush
