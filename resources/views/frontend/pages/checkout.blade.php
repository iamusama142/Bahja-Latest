@extends('frontend.layouts.master')
@section('title','Bahja | Checkout')
@section('main-content')
    <section class="inner-page">
        <section class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="hero-content page-head">
                        <h3>{{__('Checkout')}}</h3>
                    </div>
                </div>
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row cart-cont checkout-left">
                        <div class="col-12 col-md-7">
                            <div class="address-part">
                                @php
                                    $address = [];
                                    if(Auth::check())
                                        $address=DB::table('addresses')->join('shippings', 'shippings.id', '=', 'addresses.shipping')->select('addresses.*','shippings.price','shippings.type AS shiping_area')->where('addresses.user_id', auth()->user()->id)->where('addresses.status', 'active')->get();
                                @endphp

                                {{-- {{print_r($address)}} --}}

                                @if(Auth::check())

                                    <input id="address-shipping" type="hidden" name="shipping" value="">  <!-- disabled shiping dropdown / added this field to treck shipping from selected address  -->

                                    <div class="address-box">
                                        <h4 class="mb-4 add-guest">{{__('Delivery Address')}}</h4>
                                        @if(count($address)>0)
                                            @foreach($address as $data)
                                                <div class="delivery-info">
                                                    <div class="rdio rdio-primary radio-inline">
                                                        <label for="{{$data->id}}">
                                                            <input name="address_id" class="address-radio" value="{{$data->id}}" id="{{$data->id}}" type="radio"  data-price="{{$data->price}}" data-shipping="{{ $data->shipping }}" @if (old('address_id') == $data->id ) {{ 'checked' }}  @endif  @if ($loop->first) {{ 'checked' }}  @endif />
                                                            <h4>{{$data->address_name}}</h4>
                                                            <p><span>{{$data->user_name}}</span></p>
                                                            <p><span>Address</span> : {{$data->address}}</p>
                                                            <p><span>Block</span> : {{$data->block}}</p>
                                                            <p><span>Area</span> : {{$data->shiping_area}}</p>
                                                            <p><span>{{__('Phone')}}<span> : {{$data->phone}}</p>
                                                            <div class="address-action">
                                                                <a href="{{route('address.edit',$data->id)}}" class="btn btn-outline-dark mr-2">{{__('Edit')}}</a>
                                                                <a href="{{route('address.index')}}" class="dltBtn btn btn-outline-dark mr-2">{{__('Remove')}}</a>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                        @else
                                            <h3>{{__('Empty Address List')}}</h3>
                                        @endif
                                            @error('address_id')
                                            <span class="text-danger">Please select a delivery address</span>
                                            @enderror
                                            @error('shipping')
                                            <span class="text-danger">Please select a delivery address</span>
                                            @enderror
                                    </div>
                                    <div class="add-adddress">
                                        <a href="{{route('address.create')}}"> <i class="fa fa-plus"></i>{{__('Add New Address')}} </a>
                                    </div>
                                      <br>
                                      <!--delevery charche select option start here..-->
                                    {{-- <div class="shipping">
                                        <span>{{__('Select Area')}}</span>

                                            <span class="ml-auto font-size-sm">

                                                @if(count(Helper::shipping())>0 && Helper::cartCount('',session('guest_user_id'))>0)

                                                    <select name="shipping" class="nice-select form-control" style="padding: 0px 13px;height: 60px;">

                                                        <option value="">{{__('Select your address')}}</option>

                                                        @foreach(Helper::shipping() as $shipping)

                                                            <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}</option>

                                                        @endforeach

                                                    </select>

                                                    @error('shipping')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                @else

                                                    <span>{{__('Free')}}</span>

                                                @endif

                                                    @error('shipping')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                            </span>
                                    </div> --}}
                                    <!--delevery charche select option end here..-->
                                @else
                                    <h3 class="ml-3">Delivery Details</h3>
                                   
                                    <div class="billing-details">
                                        <div class="mb-3 col-12">
                                            <label for="">Full Name<span class="required-icon">*</span></label>
                                            <input type="text" name="first_name" placeholder="Full Name *" class="form-control" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="mb-3 col-12">
                                            
                                            <input type="text" name="last_name" placeholder="Last Name" class="form-control">
                                            @error('last_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div> --}}
                                        <div class="mb-3 col-12">
                                        <label for="">Email<span class="required-icon">*</span></label>
                                            <input type="email" name="email" placeholder="Email *" class="form-control" value="{{old('email')}}">
                                            @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-12">
                                        <label for="">Phone<span class="required-icon">*</span></label>
                                            <input type="text" name="phone" placeholder="Phone Number *" class="form-control" maxlength="8" value="{{old('phone')}}">
                                            @error('phone')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3 col-12">
                                        <label for="">Address<span class="required-icon">*</span></label>
                                            <input type="text" name="street_address" placeholder="Address *" class="form-control" value="{{old('street_address')}}">
                                            @error('street_address')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-12">
                                            <div class="form-group">
                                            <label for="">Block<span class="required-icon">*</span></label>
                                                <input class="form-control" type="text" placeholder="Block *" name="block" value="{{old('block')}}">
                                                @error('block')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    <!--delevery charge select option start here..-->
                                    <div class="mb-3 col-12 shipping">
                                            <span class="ml-auto font-size-sm">

                                                @if(count(Helper::shipping())>0 && Helper::cartCount('',session('guest_user_id'))>0)
                                                <label for="">{{__('Select your Area')}}<span class="required-icon">*</span></label>

                                                    <select name="shipping" class="nice-select form-control" style="padding: 0px 13px;height: 60px;">

                                                        <option value="">{{__('Select your Area')}} *</option>

                                                        @foreach(Helper::shipping() as $shipping)

                                                            <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}" @if (old('shipping') == $shipping->id) {{ 'selected' }}  @endif>{{$shipping->type}}</option>

                                                        @endforeach

                                                    </select>

                                                    @error('shipping')

                                                        <span class="text-danger">Area is required</span>

                                                    @enderror

                                                @else

                                                    <span>{{__('You dont have a product in cart')}}</span>

                                                @endif


                                            </span>
                                    </div>

                                    <!--delevery charche select option end here..-->
                                        <div class="mb-3 col-12">
                                        <label for="">Delivery Instruction<span class="required-icon"> (optional)</span></label>
                                            <input type="text" name="delivery_instruction" placeholder="Delivery Instruction (optional)" class="form-control" value="{{old('delivery_instruction')}}">
                                            @error('delivery_instruction')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="mb-3 col-12">
                                            <input type="text" name="address2" placeholder="Street address 2" class="form-control">
                                        </div> --}}

                                        
                                    </div>
                                    <br>
                                @endif
                            </div>
                            <div class="payment-part mt-5 pt-3">
                                <h4 class="mb-4">{{__('Payment Method')}}</h4>
                                <div class="list-group list-group-sm mb-7">
                                    <div class="list-group-item">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input collapsed" id="knet" name="payment_method" type="radio" value="knet" @if (old('payment_method') == 'knet') {{ 'checked' }}  @endif/>
                                            <label class="custom-control-label font-size-sm text-body text-nowrap" for="knet">
                                                <span class="px-2"> <img src="{{asset('frontend/assets/images/knet.png')}}" alt="" /></span>
                                                {{__('Knet')}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input collapsed" id="visa" name="payment_method" type="radio" value="myfatoorah" @if (old('payment_method') == 'myfatoorah') {{ 'checked' }}  @endif/>
                                            <label class="custom-control-label font-size-sm text-body text-nowrap" for="visa">
                                                <span class="px-2">
                                                    <img src="{{asset('frontend/assets/images/visa.png')}}" alt="" />
                                                </span>
                                                    {{__('Myfatoorah')}}
                                            </label>
                                        </div>
                                    </div>
                                    @error('payment_method')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-lg-5 cart-right">
                            <h4 class="mb-1">{{__('Order Items')}} ({{Helper::cartCount('',session('guest_user_id'))}})</h4>
                            <hr class="my-3" />
                            <ul class="list-group list-group-lg list-group-flush-y list-group-flush-x mb-7">
                                @if(Helper::getAllProductFromCart())
                                    @foreach(Helper::getAllProductFromCart() as $key=>$cart)
                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    @php
                                                        $photo=explode(',',$cart->product['photo']);
                                                    @endphp
                                                    <a href="{{route('product-detail',$cart->product['slug'])}}">
                                                        <img src="{{$photo[0]}}" alt="" class="img-fluid" />

                                                    </a>

                                                    <div class="remove">

                                                        <a class=" remove-btn " href="{{route('cart-delete',$cart->id)}}">

                                                            <span class="cart-close"></span> <span class="close-text">{{__('Remove')}}</span>

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col">

                                                    <p class="mb-1">

                                                        <a class="text-body" href="{{route('product-detail',$cart->product['slug'])}}"> {{(App::isLocale('ar') ? $cart->product['title_ar'] : $cart->product['title'])}}</a>

                                                    </p>

                                                    <div class="mt-0">

                                                        <small class="d-block text-muted">{{__('Qty')}}: {{$cart->quantity}} </small>

                                                    </div>

                                                    <div class="price">KWD {{number_format($cart->amount,3)}}</div>

                                                </div>

                                            </div>

                                        </li>

                                    @endforeach

                                @endif

                            </ul>



                            <div class="card mb-5 bg-light mt-3">

                                <div class="card-body">

                                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">

                                        <li class="list-group-item d-flex order_subtotal" data-price="{{Helper::totalCartPrice()}}">

                                            <span>{{__('Subtotal')}}</span>

                                            <span class="ml-auto font-size-sm">KWD {{number_format(Helper::totalCartPrice(),3)}}</span>

                                        </li>

                                        <!-- <li class="list-group-item d-flex shipping">

                                            <span>{{__('Delivery Charge')}}</span>

                                            <span class="ml-auto font-size-sm">

                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)

                                                    <select name="shipping" class="nice-select form-control">

                                                        <option value="">{{__('Select your address')}}</option>

                                                        @foreach(Helper::shipping() as $shipping)

                                                            <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: KWD {{$shipping->price}}</option>

                                                        @endforeach

                                                    </select>

                                                    @error('shipping')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                @else

                                                    <span>{{__('Free')}}</span>

                                                @endif

                                                    @error('shipping')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                            </span>

                                        </li> -->

                                        @if(session('coupon'))

                                            <li class="list-group-item d-flex font-size-lg font-weight-bold coupon_price" data-price="{{session('coupon')['value']}}"><span>{{__('You Save')}}</span> <span class="ml-auto">KWD {{number_format(session('coupon')['value'],2)}}</span></li>

                                        @endif

                                        @php

                                            $total_amount=Helper::totalCartPrice();

                                            if(session('coupon')){

                                                $total_amount=$total_amount-session('coupon')['value'];

                                            }

                                        @endphp
                                         <li class="list-group-item d-flex font-size-lg">Delivery Charge <span class="ml-auto">KWD  <span id="pcharge">Free</span></span></li>
                                        <li class="list-group-item d-flex font-size-lg font-weight-bold"><span>{{__('Total')}}</span> <span class="ml-auto">KWD <span id="order_total_price">{{number_format($total_amount,3)}}</span></span></li>

                                    </ul>

                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">

                                {{__('Confirm Order')}}

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </section>

    </section>

@endsection

@push('scripts')

    <script>




        $(document).ready(function(){


            @if(Auth::check())

                //for users

                //if already selected
                
                let selected_address_shipping = $('.address-radio:checked').data('shipping');

                if(selected_address_shipping != undefined){
                    $('#address-shipping').val(selected_address_shipping);
                }

                let selected_address_shipping_cost = $('.address-radio:checked').data('price');

                if(selected_address_shipping_cost != undefined){

                    let cost = parseFloat(selected_address_shipping_cost) || 0;
                    let subtotal = parseFloat( $('.order_subtotal').data('price') );
                    let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;

                    $('#order_total_price').text(''+(subtotal + cost-coupon).toFixed(3));
                    $('#pcharge').text(cost.toFixed(3));
                    
                }

                //if already selected end

                
                $('.address-radio').change(function(){
                    let cost = parseFloat( $(this).data('price') ) || 0;
                    let subtotal = parseFloat( $('.order_subtotal').data('price') );
                    let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;

                    $('#order_total_price').text(''+(subtotal + cost-coupon).toFixed(3));
                    $('#pcharge').text(cost.toFixed(3));
                    $('#address-shipping').val($(this).data('shipping'));
                    
                    console.log(subtotal,'subtotal',$(this).data('shipping'));

                });

            @else

                //for guest
                
                let selected_address_shipping_cost = $('.shipping select[name=shipping] option:selected').data('price');

                //if already selected

                if(selected_address_shipping_cost != undefined){

                    let cost = parseFloat(selected_address_shipping_cost) || 0;
                    let subtotal = parseFloat( $('.order_subtotal').data('price') );
                    let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;

                    $('#order_total_price').text(''+(subtotal + cost-coupon).toFixed(3));
                    $('#pcharge').text(cost.toFixed(3));
                    
                }

                //if already selected end

                $('.shipping select[name=shipping]').change(function(){

                let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;

                let subtotal = parseFloat( $('.order_subtotal').data('price') );

                let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;

                $('#order_total_price').text(''+(subtotal + cost-coupon).toFixed(3));
                $('#pcharge').text(cost.toFixed(3));
                console.log(subtotal,'subtotal');

                });

            @endif

            });

    </script>

@endpush

