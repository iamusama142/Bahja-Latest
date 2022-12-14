@extends('backend.layouts.master')

@section('title','Bahja | Product Edit')

@section('main-content')

    <div class="nk-content ">

        <div class="container-fluid">

            <div class="nk-content-inner">

                <div class="nk-content-body">

                    <div class="components-preview wide-md mx-auto">

                        <div class="nk-block-head nk-block-head-lg wide-sm">

                            <div class="nk-block-head-content">

                                <div class="nk-block-head-sub"><a class="back-to" href="{{route('product.index')}}">

                                        <em class="icon ni ni-arrow-left"></em>

                                        <span>Back</span>

                                    </a>

                                </div>

                                <h2 class="nk-block-title fw-normal">Edit Product</h2>

                            </div>

                        </div><!-- .nk-block -->

                        <div class="nk-block nk-block-lg">

                            <div class="row g-gs">

                                <div class="col-lg-12">

                                    <div class="card h-100">



                                        <div class="float-end mt-1 translation-lang">

                                            <div class="custom-control custom-control-sm custom-radio custom-control-pro" style="margin-left: 0px">

                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">

                                                <label class="custom-control-label" for="customSwitch1">

                                                    <em class="icon icon-lg ni ni-tranx-fill"></em>

                                                    <span class="english-title" style="font-size: 20px; font-weight: bold">English</span>

                                                    <span class="arabic-title" style="font-size: 20px; font-weight: bold"  >Arabic</span>

                                                </label>

                                            </div>

                                        </div>

                                        <div class="card-inner">

                                            <form action="{{route('product.update',$product->id)}}" method="post">

                                                @csrf

                                                @method('PATCH')

                                                <div class="form-group english-lan">

                                                    <label class="form-label" for="Title">Title (English) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control @error('title') error @enderror" name="title" id="Title" value="{{$product->title}}">

                                                        @error('title')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group arabic-lan">

                                                    <label class="form-label" for="Title_ar" dir="rtl">Title (Arabic) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap" dir="rtl">

                                                        <input type="text" class="form-control @error('title_ar') error @enderror" name="title_ar" id="Title_ar" value="{{$product->title_ar}}">

                                                        @error('title_ar')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group english-lan">

                                                    <label class="form-label" for="summary">Summary (English) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <textarea class="form-control description @error('summary') error @enderror" name="summary" id="summary">

                                                            {{$product->summary}}

                                                        </textarea>

                                                        @error('summary')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group arabic-lan" dir="rtl">

                                                    <label class="form-label" for="summary_ar">Summary (Arabic) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <textarea class="form-control description @error('summary_ar') error @enderror" name="summary_ar" id="summary_ar">

                                                            {{$product->summary_ar}}

                                                        </textarea>

                                                        @error('summary_ar')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group english-lan">

                                                    <label class="form-label" for="description">Description (English)</label>

                                                    <div class="form-control-wrap">

                                                        <textarea class="form-control description @error('description') error @enderror" name="description" id="description">

                                                            {{$product->description}}

                                                        </textarea>

                                                        @error('description')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group arabic-lan" dir="rtl">

                                                    <label class="form-label" for="description_ar">Description (Arabic)</label>

                                                    <div class="form-control-wrap">

                                                        <textarea class="form-control description @error('description_ar') error @enderror" name="description_ar" id="description_ar">

                                                            {{$product->description_ar}}

                                                        </textarea>

                                                        @error('description_ar')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="custom-control custom-checkbox" style="display:none">

                                                    <input type="checkbox"  name="is_featured" class="custom-control-input" id="is_featured" value='{{$product->is_featured}}' {{(($product->is_featured) ? 'checked' : '')}}>

                                                    <label class="custom-control-label" for="is_featured" >Is Featured</label>

                                                </div>

                                                <div class="form-group">

                                                    <label for="cat_id">Category <span class="text-danger">*</span></label>

                                                    <select name="cat_id" id="cat_id" class="form-control @error('cat_id') error @enderror">

                                                        <option value="">--Select any category--</option>

                                                        @foreach($categories as $key=>$cat_data)

                                                            <option value='{{$cat_data->id}}' {{(($product->cat_id==$cat_data->id)? 'selected' : '')}}>{{$cat_data->title}}</option>

                                                        @endforeach

                                                    </select>

                                                    @error('cat_id')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                </div>

                                                @php

                                                    $sub_cat_info=DB::table('categories')->select('title')->where('id',$product->child_cat_id)->get();

                                                @endphp

                                                <div class="form-group {{(($product->child_cat_id)? '' : 'd-none')}}" id="child_cat_div">

                                                    <label for="child_cat_id">Sub Category</label>

                                                    <select name="child_cat_id" id="child_cat_id" class="form-control">

                                                        <option value="">--Select any sub category--</option>

                                                    </select>

                                                </div>

                                                <div class="form-group">

                                                    <label class="form-label" for="price">Selling Price (KWD) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control @error('price') error @enderror" name="price" id="price" value="{{$product->price}}">

                                                        @error('price')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group">

                                                    <label class="form-label" for="discount">Discounted Price (KWD) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control @error('price') error @enderror" name="discount" id="discount" value="{{$product->discount}}" min="0" max="100">

                                                        @error('discount')

                                                        <span class="text-danger">{{ str_replace('discount','selling price',$message)}} </span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group">

                                                    <label class="form-label">Size</label>

                                                    <div class="form-control-wrap">

                                                        <select class="form-select js-select2" name="size">

                                                            @foreach($items as $item)

                                                                @php

                                                                    $data=explode(',',$item->size);

                                                                    // dd($data);

                                                                @endphp

                                                                <option value="50" @if( in_array( "50ml",$data ) ) selected @endif>50 (ML)</option>

                                                                <option value="75" @if( in_array( "75ml",$data ) ) selected @endif>75 (ML)</option>

                                                                <option value="100" @if( in_array( "100ml",$data ) ) selected @endif>100 (ML)</option>

                                                            @endforeach

                                                        </select>

                                                    </div>

                                                </div>



                                                <div class="form-group">

                                                    <label for="condition">Condition</label>

                                                    <select name="condition" class="form-control">

                                                        <option value="">--Select Condition--</option>

                                                        <option value="default" {{(($product->condition=='default')? 'selected':'')}}>Default</option>

                                                        <option value="new" {{(($product->condition=='new')? 'selected':'')}}>New</option>

                                                        <option value="hot" {{(($product->condition=='hot')? 'selected':'')}}>Hot</option>

                                                    </select>

                                                </div>

                                                <div class="form-group">

                                                    <label class="form-label" for="stock">Quantity<span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="number" class="form-control @error('stock') error @enderror" name="stock" id="stock" value="{{$product->stock}}" min="0">

                                                        @error('stock')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>



                                                <div class="form-group">

                                                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>

                                                    <div class="input-group">

                                                        <span class="input-group-btn">

                                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">

                                                            <i class="fa fa-picture-o"></i> Choose

                                                            </a>

                                                        </span>

                                                        <input id="thumbnail" class="form-control @error('photo') error @enderror" type="text" name="photo" value="{{$product->photo}}">

                                                    </div>

                                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                                                    @error('photo')

                                                    <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                </div>

                                                <div class="form-group">

                                                    <label class="form-label" for="status">Status <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <div class="form-control-select">

                                                            <select class="form-control form-select-lg" id="default-06" name="status">

                                                                <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>

                                                                <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                    @error('status')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                </div>

                                                <div class="form-group">

                                                    <label class="form-label" for="status">Product Type <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <div class="form-control-select">

                                                            <select class="form-control form-select-lg" id="default-06" name="productType">

                                                                <option value="bestseller" {{(($product->productType=='bestseller')? 'selected' : '')}}>Best Sellers</option>

                                                                <option value="newarrivals" {{(($product->productType=='newarrivals')? 'selected' : '')}}>New Arrivals</option>
                                                                <option value="" {{(($product->productType==null)? 'selected' : '')}}>Default Select</option>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush

@push('scripts')

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>

        $('#lfm').filemanager('image');

        $(document).ready(function() {

            $('#summary').summernote({

                placeholder: "Write short description.....",

                tabsize: 2,

                height: 150

            });

        });

        $(document).ready(function() {

            $('.description').summernote({

                placeholder: "Write detail Description.....",

                tabsize: 2,

                height: 150

            });

        });

    </script>



    <script>

        var  child_cat_id='{{$product->child_cat_id}}';

        // alert(child_cat_id);

        $('#cat_id').change(function(){

            var cat_id=$(this).val();



            if(cat_id !=null){

                // ajax call

                $.ajax({

                    url:"/admin/category/"+cat_id+"/child",

                    type:"POST",

                    data:{

                        _token:"{{csrf_token()}}"

                    },

                    success:function(response){

                        if(typeof(response)!='object'){

                            response=$.parseJSON(response);

                        }

                        var html_option="<option value=''>--Select any one--</option>";

                        if(response.status){

                            var data=response.data;

                            if(response.data){

                                $('#child_cat_div').removeClass('d-none');

                                $.each(data,function(id,title){

                                    html_option += "<option value='"+id+"' "+(child_cat_id==id ? 'selected ' : '')+">"+title+"</option>";

                                });

                            }

                            else{

                                console.log('no response data');

                            }

                        }

                        else{

                            $('#child_cat_div').addClass('d-none');

                        }

                        $('#child_cat_id').html(html_option);



                    }

                });

            }

            else{



            }



        });

        if(child_cat_id!=null){

            $('#cat_id').change();

        }

    </script>

@endpush

