@extends('backend.layouts.master')
@section('title','Bahja | coupon Edit')
@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="{{route('coupon.index')}}">
                                        <em class="icon ni ni-arrow-left"></em>
                                        <span>Back</span>
                                    </a>
                                </div>
                                <h2 class="nk-block-title fw-normal">Edit Coupon</h2>
                            </div>
                        </div><!-- .nk-block -->
                        <div class="nk-block nk-block-lg">
                            <div class="row g-gs">
                                <div class="col-lg-12">
                                    <div class="card h-100">
                                        <div class="card-inner">
                                            <form method="post" action="{{route('coupon.update',$coupon->id)}}">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group">
                                                    <label class="form-label" for="code">Coupon Code <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('code') error @enderror" name="code" id="code" value="{{$coupon->code}}" >
                                                        @error('code')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="type">Type <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-control-select">
                                                            <select class="form-control form-select-lg" id="type" name="type">
                                                                <option value="fixed" {{(($coupon->type=='fixed') ? 'selected' : '')}}>Fixed</option>
                                                                <option value="percent" {{(($coupon->type=='percent') ? 'selected' : '')}}>Percent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    @error('type')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="value">Value<span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" class="form-control @error('value') error @enderror" name="value" id="value" value="{{$coupon->value}}" >
                                                        @error('value')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-control-select">
                                                            <select class="form-control form-select-lg" id="default-06" name="status">
                                                                <option value="active" {{(($coupon->status=='active') ? 'selected' : '')}}>Active</option>
                                                                <option value="inactive" {{(($coupon->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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
