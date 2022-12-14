@extends('frontend.layouts.head')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bahja</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/layout.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/mydesign.css" /> -->
    <link rel="icon" type="image/x-icon" href="https://bahja-latest.theklozet.com/frontend/assets/images/logo.svg">

</head>
<body style="font-family: 'Montserrat', sans-serif;">
     
   
    <div class="top_conf_odr" style="background-color: #000;
    height: 30px;"></div>
    <div class="conf_odr" style="padding-top: 15px;">
        <div class="container">
	       <a href="./">
               <img style=" width: 100%;
               max-width: 130px;" src="https://bahja-latest.theklozet.com/frontend/assets/images/logo.svg" />
            </a>	
        </div>
    </div>
	 
	<div class="my_acc_section" style="padding: 60px 0 110px 0;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					 
                    <div class="left_top_are ">
                        
                        <div class="prt_ord">
                            <h2 class="ord_conf">Order Confirmed!</h2>
                            <h4 class="ord_conf_hf" style="font-family: 'FONTSPRING DEMO - Visby CF';
                            font-size: 18px;
                            font-weight: 600;
                            margin-bottom: 15px;">Hello {{$orderData->first_name}},</h4>
                            <p class="ord_conf_txt" style="margin-bottom: 44px;">Your order has been confirmed and will be shipping within few days.</p>
                        </div>
    
                    </div> 
				</div>
                
                </div>
            </div>
        
        <div class="container middle_area_ord">
            <div class="border_need mr_b_l"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="div_loop">
                            <h5 style="   font-family: 'Montserrat', sans-serif;
                            text-transform: uppercase;
                            font-size: 17px;
                            font-weight: 500;">Order number</h5>
                            <p style="  color: #8f8f8f;
                            font-family: 'Montserrat', sans-serif;
                            font-size: 15px;
                            font-weight: 300;
                            line-height: 1.3;">{{$orderData->order_number}}</p>
                        </div>
                        <div class="div_loop" style=" margin-bottom: 30px;">
                            <h5 style="  font-family: 'Montserrat', sans-serif;
                            text-transform: uppercase;
                            font-size: 17px;
                            font-weight: 500;">Order Date</h5>
                            <p>{{$orderData->created_at->format('d/m/Y')}}</p>
                        </div>
                        {{-- <div class="div_loop" style=" margin-bottom: 30px;">
                            <h5 style="  font-family: 'Montserrat', sans-serif;
                            text-transform: uppercase;
                            font-size: 17px;
                            font-weight: 500;">Delivery Date </h5>
                            <p>20, September 2022</p>
                        </div> --}}
                        <div class="div_loop" style=" margin-bottom: 30px;">
                            <h5 style="  font-family: 'Montserrat', sans-serif;
                            text-transform: uppercase;
                            font-size: 17px;
                            font-weight: 500;">Payment ID</h5>
                            <p>{{$orderData->paymentId}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="div_loop">
                            <h5 style="  font-family: 'Montserrat', sans-serif;
                            text-transform: uppercase;
                            font-size: 17px;
                            font-weight: 500;">Shipping Details</h5>
                            <p style="color: #8f8f8f;
                            font-family: 'Montserrat', sans-serif;
                            font-size: 15px;
                            font-weight: 300;
                            line-height: 1.3;">Full Name:-{{$orderData->first_name}} {{$orderData->last_name}} <br>
                              Phone:-  {{$orderData->phone}} <br>
                              
                              Address:-  {{$orderData->address1}}
                                {{$orderData->address2}}
                            </p>
                        </div>
                        <div class="div_loop">
                            <h5 style="  font-family: 'Montserrat', sans-serif;
                            text-transform: uppercase;
                            font-size: 17px;
                            font-weight: 500;">PAYMENT METHODS</h5>
                            <p style="color: #8f8f8f;
                            font-family: 'Montserrat', sans-serif;
                            font-size: 15px;
                            font-weight: 300;
                            line-height: 1.3;text-transform: capitalize;">{{$orderData->payment_method}}</p>
                        </div>
                        {{-- <div class="div_loop">
                            <h5 style="  font-family: 'Montserrat', sans-serif;
                            text-transform: uppercase;
                            font-size: 17px;
                            font-weight: 500;">Track ID </h5>
                            <p style="color: #8f8f8f;
                            font-family: 'Montserrat', sans-serif;
                            font-size: 15px;
                            font-weight: 300;
                            line-height: 1.3;">13608</p>
                        </div> --}}
                    </div>
            
                </div>
            <div class="border_need mar_top_k" style=" margin-top: 40px;
            margin-bottom: 6px;
            width: 100%;"></div>
        </div>
        
        <div class="container">
            <div class="row">
				<div class="col-12">
                    
                    <h3 class="order_heading" style="margin: 0;
                    background-color: #e8e8e8;
                    /*text-transform: uppercase;*/
                    font-family: 'Montserrat', sans-serif;
                    font-size: 21px;
                    padding: 10px;">Order Details</h3>
                   
                    <div class="order_page_jkl right_top_are" style="padding-right: 0;">
                        
                        <div class="order_page_jkl right_top_inner" style=" background-color: #fff;
                        padding: 0 0;">
                             @foreach($cartDetails as $productDetails)
                            <!--single item start-->
                            <div class="inner_right_top_inner" style=" border-bottom: 1px solid #c5c5c5;
                            margin-bottom: 15px;
                            padding-bottom: 15px;
                            padding-top: 15px;
                            display: flex;">
                                <div class="image_box">
                                    <img src="{{ asset($productDetails->product->photo) }}" style="width: 200px;">
                                </div>
                                <div class="descp_box">
                                    
                                 Product Name:   {{$productDetails->product->title}} <br>
                                 Quntity:   {{$productDetails->quantity}}
                                
                                    <br>
                                    <p class="clo-r">
                                        <br>
                                        size:  {{$productDetails->product->size}} 
                                    </p>
                                    <p>
                                        Price: KWD {{$productDetails->product->price}}
                                     </p>
                                </div>
                                
                                   
                               
                            </div>
                            <!--single item end-->
                            @endforeach
                        </div>
                        
                    </div>

                    
                    <div class="btm_total_area" style=" background-color: #e8e8e8;">
                        <div class="order_heading_area" style="width: calc(100% - 150px - 4px);
                        display: inline-block;
                        vertical-align: middle;">
                            <h3 class="order_heading" style="padding-left:7px;">Subtotal</h3>
                        </div>
                        <div class="price_area" style=" width: calc(150px - 4px);
                        display: inline-block;
                        vertical-align: middle;
                        text-align: right;">
                            <p style=" margin: 0;
                            font-size: 20px;
                            font-family: 'Outfit'">
                               KWD {{number_format($productDetails->order->sub_total,3)}}
                            </p>
                        </div>
                    </div>
                    <div class="btm_total_area_table" style=" text-align: right;
                    font-family: 'Montserrat', sans-serif;">
                        <table style="  width: 100%;
                        max-width: 260px;
                        float: right;
                        font-family: 'Montserrat', sans-serif;">
                            <tr style="     border-bottom: 1px solid #c5c5c5;
                            ">
                                <td>
                                    Shipping
                                </td>
                                <td>
                                    <p style=" font-family: 'Montserrat', sans-serif;">KWD {{number_format($shipping->price,3)}}</p>                            
                                </td>
                            </tr>
                            
                            <tr class="order_total" >
                                <td >
                                  
                                    Order Total
                                </td>
                                <td>
                                    <p>KWD {{number_format($totalAmunt,3)}}</p> 
                                </td>
                            </tr>
                        </table>

                        <a style="  border: 1px solid black; 
        position:absolute; 
        bottom:0 ; 
        left:0;
        padding: 10px; 
        background: black;
        color: white;" href="https://bahja-latest.theklozet.com/product-grids">

                            <svg class="bi" fill="currentColor" width="25" height="25">

                                <use xlink:href="frontend/assets/images/bootstrap-icons.svg#arrow-left"></use>

                            </svg>

                            Continue Shopping

                        </a>
                    </div>
                    
                    
				</div>
			</div>
			 
		</div>
	</div>
	 
     

	</section>
    
    
	<script src="assets/js/menu.js"></script>
    
    
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html>