@extends('backend.layouts.master')
@section('title','Bahja | Banner Update')
@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="{{url('admin/area')}}">
                                        <em class="icon ni ni-arrow-left"></em>
                                        <span>Back</span>
                                    </a>
                                </div>
                                <h2 class="nk-block-title fw-normal">Update Area</h2>
                            </div>
                        </div><!-- .nk-block -->
                        <form action="{{url('admin/area/'.$areaedit->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Area Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$areaedit->name}}">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        <!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection



