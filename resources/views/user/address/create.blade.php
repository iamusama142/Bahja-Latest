@extends('user.layouts.master')
@section('title','Bahja | Add address')
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
                                <h5>{{__('Add New Address')}}</h5>
                            </div>
                            <div class="block-body">
                                <form method="post" action="{{route('address.store')}}">
                                    @csrf
                                    <div class="row mb-5 form-area">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="">{{__('Address Profile Name eg. My Office')}}<span class="required-icon">*</span> Home<span class="required-icon">*</span> etc.</label>
                                                <input class="form-control custom-field" placeholder="Address Profile Name eg. My Office* Home* etc." type="text" name="address_name" value="{{ old('address_name') }}" required="">
                                                @error('address_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="">{{__('Full Name')}}<span class="required-icon">*</span></label>
                                                <input class="form-control custom-field" placeholder="Full Name*" type="text" required="" name="user_name" value="{{ old('user_name') }}">
                                                @error('user_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <div class="new-form-select">
                                                <label for="">{{__('Select Area')}}<span class="required-icon">*</span></label>
                                                    <select name="area" class="select" >
                                                        <option value="">{{__('Select Area')}}</option>
                                                        <option value="625">Abdaly</option>
                                                        <option value="532">Abdullah Al-Mubarak - West Jleeb</option>
                                                        <option value="485">Abdullah Al-Salem</option>
                                                        <option value="533">Abraq Khaitan</option>
                                                        <option value="581">Abu Ftaira</option>
                                                        <option value="552">Abu Halifa</option>
                                                        <option value="582">Abu Hasaniya</option>
                                                        <option value="489">Adailiya</option>
                                                        <option value="586">Al-Qusour</option>
                                                        <option value="583">Adan</option>
                                                        <option value="534">Airport</option>
                                                        <option value="602">Al Nahda</option>
                                                        <option value="553">Al-Ahmadi</option>
                                                        <option value="515">Al-Bedae</option>
                                                        <option value="585">Al-Qurain</option>
                                                        <option value="606">Ali Al Salem Base</option>
                                                        <option value="584">Ali Sabah Al-Salem</option>
                                                        <option value="603">Amghara</option>
                                                        <option value="535">Andalous</option>
                                                        <option value="536">Ardhiya</option>
                                                        <option value="537">Ardiya Small Industrial</option>
                                                        <option value="538">Ardiya Storage Zone</option>
                                                        <option value="539">Ashbeliah</option>
                                                        <option value="516">Bayan</option>
                                                        <option value="490">Bnaid Al-Qar</option>
                                                        <option value="633">Bneider</option>
                                                        <option value="587">Coast Strip B</option>
                                                        <option value="612">Dahiyat Al Seddeek</option>
                                                        <option value="491">Daiya</option>
                                                        <option value="492">Dasma</option>
                                                        <option value="493">Dasman</option>
                                                        <option value="554">Dhaher</option>
                                                        <option value="540">Dhajeej</option>
                                                        <option value="494">Doha</option>
                                                        <option value="631">Dubaeya</option>
                                                        <option value="555">East Al Ahmadi</option>
                                                        <option value="556">Egaila</option>
                                                        <option value="608">Eshpilya</option>
                                                        <option value="541">Exhibits - South Khaitan</option>
                                                        <option value="557">Fahad Al Ahmed</option>
                                                        <option value="558">Fahaheel</option>
                                                        <option value="495">Faiha</option>
                                                        <option value="542">Farwaniya</option>
                                                        <option value="543">Ferdous</option>
                                                        <option value="559">Fintas</option>
                                                        <option value="588">Fnaitess</option>
                                                        <option value="629">Furusiyat al ahmadi</option>
                                                        <option value="496">Ghornata</option>
                                                        <option value="560">Hadiya</option>
                                                        <option value="611">Hasawi</option>
                                                        <option value="613">Hateen</option>
                                                        <option value="517">Hawally</option>
                                                        <option value="518">Hitteen</option>
                                                        <option value="607">Jaber Al Ahmed</option>
                                                        <option value="561">Jaber Al-Ali</option>
                                                        <option value="519">Jabriya</option>
                                                        <option value="570">Jahra</option>
                                                        <option value="544">Jleeb Al-Shiyoukh</option>
                                                        <option value="632">Juleya'a</option>
                                                        <option value="628">Kabad</option>
                                                        <option value="497">Kaifan</option>
                                                        <option value="636">Khairan</option>
                                                        <option value="545">Khaitan</option>
                                                        <option value="498">Khaldiya</option>
                                                        <option value="499">Kuwait City</option>
                                                        <option value="562">Magwa</option>
                                                        <option value="563">Mahboula</option>
                                                        <option value="520">Maidan Hawally</option>
                                                        <option value="564">Mangaf</option>
                                                        <option value="500">Mansouriya</option>
                                                        <option value="589">Messila</option>
                                                        <option value="627">Metla</option>
                                                        <option value="565">Mina Abdullah</option>
                                                        <option value="566">Mina Al Ahmadi</option>
                                                        <option value="635">Mina al Shuaiba</option>
                                                        <option value="634">Mina al zour</option>
                                                        <option value="501">Mirqab</option>
                                                        <option value="521">Mishrif</option>
                                                        <option value="522">Mubarak Al-Abdullah</option>
                                                        <option value="590">Mubarak Al-Kabir</option>
                                                        <option value="502">Mubarakiya Camps</option>
                                                        <option value="604">Naem</option>
                                                        <option value="571">Nasseem</option>
                                                        <option value="637">Nouwayseeb</option>
                                                        <option value="503">Nuzha</option>
                                                        <option value="623">Om Al Naqui</option>
                                                        <option value="546">Omariya</option>
                                                        <option value="614">Oudayliya</option>
                                                        <option value="620">Oukeila</option>
                                                        <option value="572">Oyoun</option>
                                                        <option value="504">Qadsiya</option>
                                                        <option value="573">Qairawan - South Doha</option>
                                                        <option value="574">Qasr</option>
                                                        <option value="505">Qibla</option>
                                                        <option value="506">Qortuba</option>
                                                        <option value="619">Querain</option>
                                                        <option value="618">Quosour</option>
                                                        <option value="547">Rabiya</option>
                                                        <option value="548">Rai</option>
                                                        <option value="507">Rawda</option>
                                                        <option value="549">Reggai</option>
                                                        <option value="550">Rehab</option>
                                                        <option value="610">Rihab</option>
                                                        <option value="567">Riqqa</option>
                                                        <option value="523">Rumaithiya</option>
                                                        <option value="551">Sabah Al-Nasser</option>
                                                        <option value="591">Sabah Al-Salem</option>
                                                        <option value="568">Sabahiya</option>
                                                        <option value="592">Sabhan Industrial</option>
                                                        <option value="524">Salam</option>
                                                        <option value="508">Salhiya</option>
                                                        <option value="525">Salmiya</option>
                                                        <option value="626">Salmy</option>
                                                        <option value="526">Salwa</option>
                                                        <option value="615">Sawaber</option>
                                                        <option value="624">Sebya</option>
                                                        <option value="616">Shaab al Bahri</option>
                                                        <option value="527">Shaab</option>
                                                        <option value="509">Shamiya</option>
                                                        <option value="510">Sharq</option>
                                                        <option value="575">Sheikh Saad Al Abdullah Airport</option>
                                                        <option value="569">Shuaiba Port</option>
                                                        <option value="528">Shuhada</option>
                                                        <option value="511">Shuwaikh</option>
                                                        <option value="529">Siddiq</option>
                                                        <option value="609">South Rihab</option>
                                                        <option value="593">South Wista</option>
                                                        <option value="622">Subah Al Ahmed</option>
                                                        <option value="512">Sulaibikhat</option>
                                                        <option value="576">Sulaibiya Indutrial 1</option>
                                                        <option value="577">Sulaibiya Indutrial 2</option>
                                                        <option value="578">Sulaibiya Residential</option>
                                                        <option value="579">Sulaibiya</option>
                                                        <option value="513">Surra</option>
                                                        <option value="605">Tayma</option>
                                                        <option value="621">Um al heiman</option>
                                                        <option value="630">Wafra</option>
                                                        <option value="580">Waha</option>
                                                        <option value="594">West Abu Fetera Small Indust</option>
                                                        <option value="617">West Mishref</option>
                                                        <option value="595">Wista</option>
                                                        <option value="514">Yarmouk</option>
                                                        <option value="530">Zahra</option>
                                                    </select>
                                                </div>
                                                @error('area')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div> --}}

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <div class="new-form-select">
                                                <label for="">{{__('Select your Area')}}<span class="required-icon">*</span></label>
                                                    <select name="shipping" class="nice-select form-control" style="padding: 0px 13px;height: 60px;">
                                                    

                                                        <option value="">{{__('Select your Area')}} *</option>

                                                        @foreach(Helper::shipping() as $shipping)

                                                            <option value="{{$shipping->id}}" class="shippingOption" @if (old('shipping') == $shipping->id ) {{'selected'}} @endif data-price="{{$shipping->price}}">{{$shipping->type}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                @error('shipping')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                            <label for="">{{__('Block')}}<span class="required-icon">*</span></label>
                                                <input class="form-control custom-field" type="text" placeholder="Block *" required="" name="block" value="{{ old('block') }}">
                                                @error('block')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                            <label for="">{{__('Address')}}<span class="required-icon">*</span></label>
                                                <input class="form-control custom-field" type="text" name="address" placeholder="Address (House No, Building, Street, Area)*"  value="{{ old('address') }}" required="">
                                                @error('address')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group mb-0">
                                            <label for="">{{__('Phone')}}<span class="required-icon">*</span></label>
                                                <input class="form-control custom-field" placeholder="Phone *" type="text" minlength="8" maxlength="8" required="" name="phone" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                            <label for="">{{__('Delivery Instructions')}}<span class="required-icon"></span></label>
                                                <input class="form-control custom-field" type="text" placeholder="Delivery Instructions" name="delivery_instruction" value="{{ old('delivery_instruction') }}">
                                                @error('delivery_instruction')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6" style="display: none;">
                                            <div class="form-group">
                                                <select class="form-control form-select-lg new-form-select" id="default-06" name="status">
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
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
