@extends('backend.layouts.master')
@section('title','Admin Profile')
@section('main-contentX')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Profile</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                                <h5 class="card-title">Web Store Setting</h5>
                                <p>Here is your basic store setting of your website.</p>
                                <form action="#" class="gy-3 form-settings">
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="site-name">Store Name</label>
                                                <span class="form-note">Specify the name of your website.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="site-name" value="My Store">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="site-email">Site Email</label>
                                                <span class="form-note">Specify the email address of your website.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="site-email" value="info@softnio.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="site-copyright">Site Copyright</label>
                                                <span class="form-note">Copyright information of your website.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="site-copyright" value="&copy; 2019, DashLite. All Rights Reserved.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Allow Registration</label>
                                                <span class="form-note">Enable or disable registration from site.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <ul class="custom-control-group g-3 align-center flex-wrap">
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" checked name="reg-public" id="reg-enable">
                                                        <label class="custom-control-label" for="reg-enable">Enable</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable">
                                                        <label class="custom-control-label" for="reg-disable">Disable</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="reg-public" id="reg-request">
                                                        <label class="custom-control-label" for="reg-request">On Request</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Main Website</label>
                                                <span class="form-note">Specify the URL if your main website is external.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="site-url" value="https://www.softnio.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="site-off">Maintanance Mode</label>
                                                <span class="form-note">Enable to make website make offline.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" name="reg-public" id="site-off">
                                                    <label class="custom-control-label" for="site-off">Offline</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Profile</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="card shadow mb-4">
                       <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="image">
                                            @if($profile->photo)
                                            <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{$profile->photo}}" alt="profile picture">
                                            @else
                                            <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{asset('backend/img/avatar.png')}}" alt="profile picture">
                                            @endif
                                        </div>
                                        <div class="card-body mt-4 ml-2">
                                          <h5 class="card-title text-left"><small><i class="fas fa-user"></i> {{$profile->name}}</small></h5>
                                          <p class="card-text text-left"><small><i class="fas fa-envelope"></i> {{$profile->email}}</small></p>
                                          <p class="card-text text-left"><small class="text-muted"><i class="fas fa-hammer"></i> {{$profile->role}}</small></p>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-8">
                                    <form class="border px-4 pt-2 pb-3" method="POST" action="{{route('profile-update',$profile->id)}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputTitle" class="col-form-label">Name</label>
                                          <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$profile->name}}" class="form-control">
                                          @error('name')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          </div>

                                          <div class="form-group">
                                              <label for="inputEmail" class="col-form-label">Email</label>
                                            <input id="inputEmail" disabled type="email" name="email" placeholder="Enter email"  value="{{$profile->email}}" class="form-control">
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                          </div>

                                          <div class="form-group">
                                          <label for="inputPhoto" class="col-form-label">Photo</label>
                                          <div class="input-group">
                                              <span class="input-group-btn">
                                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                  <i class="fa fa-picture-o"></i> Choose
                                                  </a>
                                              </span>
                                              <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$profile->photo}}">
                                          </div>
                                            @error('photo')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                          </div>
                                          <div class="form-group">
                                              <label for="role" class="col-form-label">Role</label>
                                              <select name="role" class="form-control">
                                                  <option value="">-----Select Role-----</option>
                                                      <option value="admin" {{(($profile->role=='admin')? 'selected' : '')}}>Admin</option>
                                                      <option value="user" {{(($profile->role=='user')? 'selected' : '')}}>User</option>
                                              </select>
                                            @error('role')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            </div>

                                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                                    </form>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .breadcrumbs{
            list-style: none;
        }
        .breadcrumbs li{
            float:left;
            margin-right:10px;
        }
        .breadcrumbs li a:hover{
            text-decoration: none;
        }
        .breadcrumbs li .active{
            color:red;
        }
        .breadcrumbs li+li:before{
            content:"/\00a0";
        }
        .image{
            background:url('{{asset('backend/img/background.jpg')}}');
            height:150px;
            background-position:center;
            background-attachment:cover;
            position: relative;
        }
        .image img{
            position: absolute;
            top:55%;
            left:35%;
            margin-top:30%;
        }
        i{
            font-size: 14px;
            padding-right:8px;
        }
    </style>
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endpush
