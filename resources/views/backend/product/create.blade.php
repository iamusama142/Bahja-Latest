@extends('backend.layouts.master')

@section('title','Bahja | Product Create')

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

                                <h2 class="nk-block-title fw-normal">Add Product </h2>

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

                                            <form id="product-form" action="{{route('product.store')}}" method="post">

                                                @csrf

                                                <div class="form-group english-lan">

                                                    <label class="form-label" for="Title">Title (English) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control @error('title') error @enderror" name="title" id="Title" value="{{old('title')}}">

                                                        <div class="form-errors title-error"></div>

                                                        @error('title')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group arabic-lan">

                                                    <label class="form-label" for="Title_ar">Title (Arabic) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input dir="rtl" type="text" class="form-control @error('title') error @enderror" name="title_ar" id="Title_ar" value="{{old('title_ar')}}">

                                                        <div class="form-errors title_ar-error"></div>

                                                        @error('title_ar')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group english-lan">

                                                    <label class="form-label" for="summary">Summary (English) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <textarea class="form-control description @error('summary') error @enderror" name="summary" id="summary">

                                                            {{old('summary')}}

                                                        </textarea>

                                                        <div class="form-errors summary-error"></div>

                                                        @error('summary')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group arabic-lan">

                                                    <label class="form-label" for="summary_ar">Summary (Arabic) <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap" dir="rtl">

                                                        <textarea  class="form-control description @error('summary_ar') error @enderror" name="summary_ar" id="summary_ar">

                                                            {{old('summary_ar')}}

                                                        </textarea>

                                                        <div class="form-errors summary_ar-error"></div>

                                                        @error('summary_ar')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group english-lan ">

                                                    <label class="form-label" for="description">Description (English)</label>

                                                    <div class="form-control-wrap">

                                                        <textarea class="form-control description @error('description') error @enderror" name="description">

                                                            {{old('description')}}

                                                        </textarea>

                                                        <div class="form-errors description-error"></div>

                                                        @error('description')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>

                                                <div class="form-group arabic-lan">

                                                    <label class="form-label" for="description_ar">Description (Arabic)</label>

                                                    <div class="form-control-wrap" dir="rtl">

                                                        <textarea class="form-control description @error('description_ar') error @enderror" name="description_ar" id="description_ar">

                                                            {{old('description_ar')}}

                                                        </textarea>

                                                        <div class="form-errors description_ar-error"></div>

                                                        @error('description_ar')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div>



                                                <div class="custom-control custom-checkbox" style="display:none">

                                                    <input type="checkbox"  name="is_featured" class="custom-control-input" id="is_featured" checked value='1'>

                                                    <label class="custom-control-label" for="is_featured">Is Featured</label>

                                                </div>

                                                <div class="form-group">

                                                    <label for="cat_id">Category <span class="text-danger">*</span></label>

                                                    <select name="cat_id" id="cat_id" class="form-select js-select2 @error('cat_id') error @enderror" multiple data-live-search="true">

                                                        <option value="">--Select any category--</option>

                                                        @foreach($categories as $key=>$cat_data)

                                                            <option value='{{$cat_data->id}}'>{{$cat_data->title}}</option>

                                                        @endforeach

                                                    </select>

                                                    <div class="form-errors cat_id-error"></div>


                                                    @error('cat_id')

                                                        <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                </div>



                                                <div class="form-group d-none" id="child_cat_div">

                                                    <label for="child_cat_id">Sub Category</label>

                                                    <select name="child_cat_id" id="child_cat_id" class="form-control">

                                                        <option value="">--Select any category--</option>

                                                        {{-- @foreach($parent_cats as $key=>$parent_cat)

                                                            <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>

                                                        @endforeach --}}

                                                    </select>

                                                </div>

                                               {{-- <div class="form-group">

                                                   <label class="form-label" for="price">Price (KWD) <span class="text-danger">*</span></label>

                                                   <div class="form-control-wrap">

                                                       <input type="number" class="form-control @error('price') error @enderror" name="price" id="price" value="{{old('price')}}">

                                                       @error('price')

                                                           <span class="text-danger">{{$message}}</span>

                                                       @enderror

                                                   </div>

                                               </div> --}}

                                                {{-- <div class="form-group">

                                                    <label class="form-label" for="discount">Discount(%) </label>

                                                    <div class="form-control-wrap">

                                                        <input type="number" class="form-control @error('discount') error @enderror" name="discount" id="discount" value="{{old('discount')}}" min="0" max="100">

                                                        @error('discount')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div> --}}

                                                <div class="form-group">

                                                    <label class="form-label">Select Categories <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <select class="form-select js-select2" multiple data-live-search="true" name="categories[]" id="multi-categories">
                                                            
                                                            @php
                                                                $category = new \App\Models\Category;
                                                                $categories = $category->getAllParentWithChild();
                                                            @endphp
    
                                                            @foreach ($categories as $category)
        
                                                                @if ($category->child_cat->count() > 0)
        
                                                                    <option value="{{$category->id}}">{{ strtoupper($category->title) }}</option>
        
                                                                    @foreach ($category->child_cat as $subcategory)
        
                                                                        <option value="{{$category->id}}#{{$subcategory->id}}">{{ strtoupper($category->title) }} &#8680; {{ strtoupper($subcategory->title) }}</option>
                                                                        
                                                                    @endforeach
        
        
                                                                @else
        
                                                                    <option value="{{$category->id}}">{{ strtoupper($category->title) }}</option>
                                                                    
                                                                @endif
                                                                
                                                            @endforeach

                                                        </select>

                                                        <div class="form-errors size-error"></div>
                                                        <div class="form-errors product-config-error"></div>

                                                        @error('size')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror
                                                        

                                                    </div>

                                                </div>


                                                <div class="form-group">

                                                    <label class="form-label">Size <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <select class="form-select js-select2" multiple data-live-search="true" name="size[]" id="productSize">

                                                            <option value="50ml">50 (ML)</option>

                                                            <option value="75ml">75 (ML)</option>

                                                            <option value="100ml">100 (ML)</option>

                                                        </select>

                                                        <div class="form-errors size-error"></div>
                                                        <div class="form-errors product-config-error"></div>

                                                        @error('size')

                                                            <span class="text-danger">{{$message}}</span>

                                                        @enderror
                                                        

                                                    </div>

                                                </div>

                                                <div class="priceContainer mb-4">



                                                </div>



                                                <div class="form-group d-none">

                                                    <label for="condition">Condition</label>

                                                    <select name="condition" class="form-control form-select-lg">

                                                        <option value="">--Select Condition--</option>

                                                        <option value="default" selected>Default</option>

                                                        <option value="new">New</option>

                                                        <option value="hot">Hot</option>

                                                    </select>

                                                </div>

                                                {{-- <div class="form-group">

                                                    <label class="form-label" for="stock">Quantity<span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                        <input type="number" class="form-control @error('stock') error @enderror" name="stock" id="stock" value="{{old('stock')}}">

                                                        @error('stock')

                                                        <span class="text-danger">{{$message}}</span>

                                                        @enderror

                                                    </div>

                                                </div> --}}



                                                <div class="form-group">

                                                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>

                                                    <div class="input-group">

                                                        <span class="input-group-btn">

                                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">

                                                            <i class="fa fa-picture-o"></i> Choose

                                                            </a>

                                                        </span>

                                                        <input id="thumbnail" class="form-control @error('photo') error @enderror" type="text" name="photo" value="{{old('photo')}}">

                                                    </div>

                                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                                                    <div class="form-errors photo-error"></div>

                                                    @error('photo')

                                                    <span class="text-danger">{{$message}}</span>

                                                    @enderror

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

                                                    <div class="form-errors status-error"></div>

                                                    @error('status')

                                                    <span class="text-danger">{{$message}}</span>

                                                    @enderror

                                                </div>

                                                <div class="form-group">

                                                 <label class="form-label" for="status">Product type <span class="text-danger">*</span></label>

                                                    <div class="form-control-wrap">

                                                    <div class="form-control-select">

                                                                <select class="form-control form-select-lg" id="default-06" name="productType">
                                                                <option value="">Default Select</option>
                                                                    <option value="bestseller">Best Sellers</option>

                                                                    <option value="newarrivals">New Arrivals</option>
                                                                   
                                                                </select>

                                                    </div>

                                                </div>

                                                <div class="form-errors productType-error"></div>

                                                @error('productType')

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



@push('styles')
<style>
    .form-errors {
        color: red;
        font-size: 14px;
        padding: 8px;
        display: none;
        border: 1px solid;
        margin-top: 8px;
    }
</style>


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

            $('.summary').summernote({

                placeholder: "Write short description.....",

                tabsize: 2,

                height: 100

            });

            $('#productSize').on('change', function (){

                $('.priceContainer').html('');

                var ops = $(this).val();

                $(ops).each(function(key, value) {


                    el = `
                    <label class="form-label mt-2">Regular Price (KWD)</label>
                    <div class=form-group mb-3">
                        <div class="form-control-wrap">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width:250px;">Selling Price ( ${value} )</span>
                                    <input type="number" name="price[]" step="any" class="form-control">
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">KWD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label class="form-label mt-2">Discounted Price  (KWD)</label>
                    <div class=form-group mb-3">
                        <div class="form-control-wrap">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width:250px;">Discounted Price ( ${value} )</span>
                                    <input type="number" name="discount[]" class="form-control" value="0">
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">KWD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label class="form-label mt-2">Stock</label>
                    <div class=form-group mb-3">
                        <div class="form-control-wrap">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width:250px;">Stock ( ${value} )</span>
                                    <input type="number" name="stock[]" class="form-control">
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">NUM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;

                    $('.priceContainer').append(el);

                });

            });


            $('#multi-categories').on('change',function(){

                let selected_categories_subcategories = $(this).val();

                let categories = [];

                let subcategories = [];

                $.each(selected_categories_subcategories,function(index,value){

                    if(value.indexOf('#') == -1){
                        categories.push(value);
                    }
                    else{
                        subcategories.push(value);
                    }
                    
                    

                });
                
                console.log('categories:',categories.join(','),'subcategories:',subcategories.join(','));
                
            });

        });





        $(document).ready(function() {

            $('.description').summernote({

                placeholder: "Write detail description.....",

                tabsize: 2,

                height: 150

            });


            $('#product-form').submit(function(e){

                e.preventDefault();

                var frmdata = new FormData(document.querySelector('#product-form'));

                $('.msg').remove();

                $.ajax({

                    url: '{{route("product.store")}}',
                    data: frmdata,
                    method: 'POST',
                    cache:false,
                    contentType:false,
                    processData:false,

                    success: function(res){

                        console.log(res);

                        if(res.status == 'error'){

                            for(property in res.errors){

                                if(property.indexOf('price') != -1 || property.indexOf('stock') != -1){
                                    $('.product-config-error').text('You have to fill out all the details below for selected sizes');
                                    $('.product-config-error').show(1000);
                                    document.querySelector('.product-config-error').scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
                                }

                                error_class = `.${property}-error`;

                                console.log(error_class);

                                error_message = res.errors[property].join();

                                $(error_class).text(error_message);

                                $(error_class).show(1000);

                                setTimeout(() => {

                                    $('.form-errors').hide(1000);

                                }, 5000);

                            }

                        }

                        if(res.status == 'success'){
                            window.location = "{{route('product.index')}}";
                        }

                    },

                    error: function(err){

                        console.log(err);

                    }

                });



        });

        });

        // $('select').selectpicker();



    </script>



    <script>

        $('#cat_id').change(function(){

            var cat_id=$(this).val();

            // alert(cat_id);

            if(cat_id !=null){

                // Ajax call

                $.ajax({

                    url:"/admin/category/"+cat_id+"/child",

                    data:{

                        _token:"{{csrf_token()}}",

                        id:cat_id

                    },

                    type:"POST",

                    success:function(response){

                        if(typeof(response) !='object'){

                            response=$.parseJSON(response)

                        }

                        // console.log(response);

                        var html_option="<option value=''>----Select sub category----</option>"

                        if(response.status){

                            var data=response.data;

                            // alert(data);

                            if(response.data){

                                $('#child_cat_div').removeClass('d-none');

                                $.each(data,function(id,title){

                                    html_option +="<option value='"+id+"'>"+title+"</option>"

                                });

                            }

                            else{

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

        })

    </script>

@endpush

