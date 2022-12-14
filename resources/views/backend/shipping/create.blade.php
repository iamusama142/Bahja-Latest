@extends('backend.layouts.master')

@section('title','Bahja | Shipping Create')

@section('main-content')

    <div class="nk-content ">

        <div class="container-fluid">

            <div class="nk-content-inner">

                <div class="nk-content-body">

                    <div class="components-preview wide-md mx-auto">

                        <div class="nk-block-head nk-block-head-lg wide-sm">

                            <div class="nk-block-head-content">

                                <div class="nk-block-head-sub"><a class="back-to" href="{{route('shipping.index')}}">

                                        <em class="icon ni ni-arrow-left"></em>

                                        <span>Back</span>

                                    </a>

                                </div>

                                <h2 class="nk-block-title fw-normal">Add Shipping</h2>

                            </div>

                        </div><!-- .nk-block -->

                        <div class="nk-block nk-block-lg">

                            <div class="row g-gs">

                                <div class="col-lg-12">

                                    <div class="card h-100">

                                        <div class="card-inner">

                                            <form action="{{route('shipping.store')}}" method="post">

                                                @csrf

                                                <div class="form-group">

                                                    <label class="form-label" for="type">Shipping Area Name <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control @error('type') error @enderror" name="type" id="type" value="{{old('type')}}">

                                                        @error('type')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group">

                                                    <label class="form-label" for="price">Shipping Cost <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control @error('price') error @enderror" name="price" id="price" value="{{old('price')}}">

                                                        @error('price')

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

                                             
                                                {{-- <div class="form-group">

                                                    <label class="form-label" for="status">Area  <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <div class="form-control-select">

                                                            <select class="form-control form-select-lg" id="default-06" name="area">
                                                            <option value="">Select Area</option>
                                                                 @foreach($area as $aries)
                                                                <option value="{{$aries->id}}">{{$aries->name}}</option>

                                                                
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                    </div>

                                                    @error('status')

                                                    <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                </div> --}}


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

