@extends('backend.layouts.master')
@section('title','Bahja | Setting')
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
                                <h2 class="nk-block-title fw-normal">Edit Setting</h2>
                            </div>
                        </div><!-- .nk-block -->
                        <div class="nk-block nk-block-lg">
                            <div class="row g-gs">
                                <div class="col-lg-12">
                                    <div class="card h-100">
                                        <div class="card-inner">
                                            <form method="post" action="{{route('settings.update')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-label" for="short_des">Short Description</label>
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control no-resize @error('short_des') error @enderror" name="short_des" id="short_des">
                                                            {{$data->short_des}}
                                                        </textarea>
                                                        @error('short_des')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="description">Description</label>
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control no-resize @error('description') error @enderror" name="description" id="description">
                                                            {{$data->description}}
                                                        </textarea>
                                                        @error('description')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPhoto" class="col-form-label">Logo <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                          <span class="input-group-btn">
                                                              <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                                              <i class="fa fa-picture-o"></i> Choose
                                                              </a>
                                                          </span>
                                                        <input id="thumbnail1" class="form-control" type="text" name="logo" value="{{$data->logo}}">
                                                    </div>
                                                    <div id="holder1" style="margin-top:15px;max-height:100px;"></div>

                                                    @error('logo')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                      <span class="input-group-btn">
                                                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                          <i class="fa fa-picture-o"></i> Choose
                                                          </a>
                                                      </span>
                                                        <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$data->photo}}">
                                                    </div>
                                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                                                    @error('photo')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="address">Address <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('address') error @enderror" name="address" id="address" value="{{$data->address}}">
                                                        @error('address')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="address">Email <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('email') error @enderror" name="email" id="email" value="{{$data->email}}">
                                                        @error('email')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="address">Phone Number<span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('phone') error @enderror" name="phone" id="phone" value="{{$data->phone}}">
                                                        @error('phone')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="instagram">instagram</label>
                                                    <div class="form-control-wrap">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                            </div>
                                                            <input type="text" class="form-control @error('instagram') error @enderror" name="instagram" id="instagram" value="{{$data->instagram}}">
                                                        </div>
                                                        @error('instagram')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="whatsapp">whatsapp</label>
                                                    <div class="form-control-wrap">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Number</span>
                                                            </div>
                                                            <input type="text" class="form-control @error('whatsapp') error @enderror" name="whatsapp" id="whatsapp" value="{{$data->whatsapp}}">
                                                        </div>
                                                        @error('whatsapp')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="facebook">Facebook</label>
                                                    <div class="form-control-wrap">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                            </div>
                                                            <input type="text" class="form-control @error('facebook') error @enderror" name="facebook" id="facebook" value="{{$data->facebook}}">
                                                        </div>
                                                        @error('facebook')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="twitter">twitter</label>
                                                    <div class="form-control-wrap">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                            </div>
                                                            <input type="text" class="form-control @error('twitter') error @enderror" name="twitter" id="twitter" value="{{$data->twitter}}">
                                                        </div>
                                                        @error('twitter')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $('#lfm').filemanager('image');
        $('#lfm1').filemanager('image');
        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 150
            });
        });

        $(document).ready(function() {
            $('#short_des').summernote({
                placeholder: "Write short Quote.....",
                tabsize: 2,
                height: 100
            });
        });
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Write detail description.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endpush
