@extends('user.layouts.master')

@section('title','Bahja | Edit address')

@section('main-content')

    <section class="inner-page">

        <section class="shopping-cart">

            <div class="container">

                <div class="row">

                    <div class="col-12 page-head">

                        <h2 class="mb-3 mt-4 ">{{__('Address')}}</h2>

                    </div>

                </div>

                <div class="row account-cont">

                    @include('user.layouts.sidebar')

                    <div class="col-lg-8 col-xl-9 account-right">

                        <div class="block mb-5">

                            <div class="block-header mb-4">

                                <h5>{{__('Edit Address')}}</h5>

                            </div>

                            <div class="block-body">

                                <form method="post" action="{{route('address.update',$address->id)}}">

                                    @csrf

                                    @method('PATCH')

                                    <div class="row mb-5 form-area">

                                        <div class="col-12 col-md-12">

                                            <div class="form-group">

                                                <input class="form-control custom-field" placeholder="Profile Name eg. My Office*" type="text" name="address_name" required="" value="{{$address->address_name}}">

                                                @error('address_name')

                                                <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>

                                        </div>

                                        <div class="col-12 col-md-12">

                                            <div class="form-group">

                                                <input class="form-control custom-field" placeholder="Full Name*" type="text" required="" name="user_name" value="{{$address->user_name}}">

                                                @error('user_name')

                                                <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>

                                        </div>

                                        {{-- <div class="col-12">

                                            <div class="form-group">

                                                <div class="form-select">


                                                    <select name="area" class="select" id="area">
                                                        <option value="">{{__('Select Area')}}</option>
                                                        @foreach($areas as $area)
                                                            <option value="{{$area->id}}" {{(($address->area==$area->id) ? 'selected' : '')}}>{{$area->name}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                                @error('area')

                                                <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>

                                        </div>  --}}

                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="new-form-select">

                                                    
                                                    <label for="shipping">Area</label>


                                                    <select name="shipping" class="nice-select form-control" style="padding: 0px 13px;height: 60px;">

                                                        <option value="" disabled>{{__('Select your Area')}} *</option>

                                                        @foreach(Helper::shipping() as $shipping)

                                                            <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}" {{(($address->shipping==$shipping->id) ? 'selected' : '')}}>{{$shipping->type}}</option>

                                                        @endforeach

                                                    </select>



                                                    <!-- 
                                                        <select name="shipping" id="shipping" class="form-selectr p-3" >
                                                            <option>Select your location</option>
                                                         </select> -->
                                                             
                                                         @error('shipping')
                                                                    <span class="text-danger"><i class="fa fa-info-circle" style="font-size: 13px"></i>{{$message}}</span>
                                                         @enderror

                                                 </div>
                                            </div>

                                            <div class="form-group">

                                                <input class="form-control custom-field" type="text" placeholder="Block *"  name="block" value="{{$address->block}}">

                                                @error('block')

                                                <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>

                                        </div>

                                        <div class="col-12">

                                            <div class="form-group">

                                                <input class="form-control custom-field" type="text" name="address" placeholder="Address (House No, Building, Street, Area)*" required="" value="{{$address->address}}">

                                                @error('address')

                                                <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>

                                        </div>

                                        <div class="col-12">

                                            <div class="form-group mb-0">

                                                <input class="form-control custom-field" placeholder="Phone *" type="tel" minlength="8" maxlength="8" required="" name="phone" value="{{$address->phone}}">

                                                @error('phone')

                                                <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>

                                        </div>

                                        <div class="col-12">

                                            <div class="form-group">

                                                <input class="form-control custom-field" type="text" placeholder="Delivery Instructions" required="" name="delivery_instruction" value="{{$address->delivery_instruction}}">

                                                @error('delivery_instruction')

                                                <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>

                                        </div>

                                        <div class="col-12" style="display: none;">

                                            <div class="form-group">

                                                <select class="form-control form-select-lg" id="default-06" name="status">

                                                    <option value="active" {{(($address->status=='active') ? 'selected' : '')}}>Active</option>

                                                    <option value="inactive" {{(($address->status=='inactive') ? 'selected' : '')}}>Inactive</option>

                                                </select>

                                                @error('status')

                                                    <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>

                                        </div>

                                    </div>

                                    <div class="text-right mt-4">

                                        <button class="btn btn-outline-dark" type="submit">

                                            <i class="fa fa-save mr-2"></i>

                                            {{__('Save changes')}}

                                        </button>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </section>

@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('frontend/js/custom/custom.js')}}"></script>
    <script>
       $(document).ready(function () {

            $("#area").on('change',function() {
                var id = $(this).val();
               
                var url = "{{route('getarea')}}/" + id;


                $.ajax({
                    url: url,
                    success: function(res){
                        $("#shipping").html(res.area);
                        
                    },
                    error: function(err){
                        console.log(err);
                    }
                });
                
               

            });
        

        });

    </script>
@endpush