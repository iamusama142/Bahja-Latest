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
                                <div class="nk-block-head-sub"><a class="back-to" href="{{route('coupon.index')}}">
                                        <em class="icon ni ni-arrow-left"></em>
                                        <span>Back</span>
                                    </a>
                                </div>
                                <h2 class="nk-block-title fw-normal">Add Coupon</h2>
                            </div>
                        </div><!-- .nk-block -->
                        <div class="nk-block nk-block-lg">
                            <div class="row g-gs">
                                <div class="col-lg-12">
                                    <div class="card h-100">
                                        <div class="card-inner">
                                            <form action="{{route('coupon.store')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-label" for="code">Coupon Code <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('code') error @enderror" name="code" id="code" value="{{old('code')}}">
                                                        @error('code')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="Type">Type <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-control-select">
                                                            <select class="form-control form-select-lg" id="Type" name="type">
                                                                <option value="fixed">Fixed</option>
                                                                <option value="percent">Percent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    @error('type')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="value">Value <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('value') error @enderror" name="value" id="value" value="{{old('value')}}">
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
                                                                <option value="active">Active</option>
                                                                <option value="inactive">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    @error('status')
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

