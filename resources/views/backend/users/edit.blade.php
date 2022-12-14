@extends('backend.layouts.master')
@section('title','Bahja | User Edit')
@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="{{route('users.index')}}">
                                        <em class="icon ni ni-arrow-left"></em>
                                        <span>Back</span>
                                    </a>
                                </div>
                                <h2 class="nk-block-title fw-normal">Edit User</h2>
                            </div>
                        </div><!-- .nk-block -->
                        <div class="nk-block nk-block-lg">
                            <div class="row g-gs">
                                <div class="col-lg-12">
                                    <div class="card h-100">
                                        <div class="card-inner">
                                            <form action="{{route('users.update',$user->id)}}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('name') error @enderror" name="name" id="name" value="{{$user->name}}">
                                                        @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="email">Email </label>
                                                    <div class="form-control-wrap">
                                                        <input type="email" class="form-control @error('email') error @enderror" name="email" id="email" value="{{$user->email}}">
                                                        @error('email')
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
                                                        <input id="thumbnail" class="form-control @error('photo') error @enderror" type="text" name="photo" value="{{$user->photo}}">
                                                    </div>
                                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                                    @error('photo')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="role">Role <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-control-select">
                                                            <select class="form-control form-select-lg" id="role" name="role">
                                                                <option value="">-----Select Role-----</option>
                                                                <option value="{{$user->role}}" {{(($user->role=='admin') ? 'selected' : '')}}>Admin</option>
                                                                <option value="{{$user->role}}" {{(($user->role=='user') ? 'selected' : '')}}>User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    @error('status')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-control-select">
                                                            <select class="form-control form-select-lg" id="default-06" name="status">
                                                                <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Active</option>
                                                                <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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
