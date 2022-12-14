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
    <link rel="icon" type="image/x-icon" href="https://bahja-latest.theklozet.com/frontend/assets/images/logo.png">

</head>
<body style="text-transform:capitalize;font-family: 'Montserrat', sans-serif;">
     
   
    <div class="top_conf_odr" style="background-color: #000;
    height: 30px;"></div>
    <div class="conf_odr" style="padding-top: 15px;">
        <div class="container">
	       <a href="./">
               <img style=" width: 100%;
               max-width: 130px;" src="https://bahja-latest.theklozet.com/frontend/assets/images/logo.png" />
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
                            <h4 class="ord_conf_hf" style="    font-family: 'Montserrat', sans-serif;

                            font-size: 18px;
                            font-weight: 600;
                            margin-bottom: 15px;">Hello Admin,</h4>
                            <p class="ord_conf_txt" style="margin-bottom: 44px;">You have just received a new order.</p>
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
                            line-height: 1.3;">Full Name:-{{$orderData->first_name}}{{$orderData->last_name}} <br>
                              Phone:-  {{$orderData->phone}} <br>
                               PostCode:- {{$orderData->post_code}},<br>
                              Address:-  {{$orderData->address1}}
                                {{$orderData->address2}}
                            </p>
                        </div>
                        <div style="display:flex">
                            <h5 style="  font-family: 'Montserrat', sans-serif;
                            text-transform: uppercase;
                            font-size: 17px;
                            font-weight: 500;">PAYMENT METHODS</h5>
                            <p style="color: #8f8f8f;
                            font-family: 'Montserrat', sans-serif;
                            font-size: 15px;
                            font-weight: 300;
                            line-height: 1.3;">{{$orderData->payment_method}}</p>
                        </div>
                        
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
                        padding: 0 0;font-family: 'Montserrat', sans-serif;">
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
                                 Quantity:   {{$productDetails->quantity}}
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
                            <h3 class="order_heading" style="padding-left:7px;">Sub Total</h3>
                        </div>
                        <div class="price_area" style=" width: calc(150px - 4px);
                        display: inline-block;
                        vertical-align: middle;
                        text-align: right;">
                            <p style=" margin: 0;
                            font-size: 20px;
                            font-family: 'Montserrat', sans-serif;">
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
                                    <p style="font-family: 'Montserrat', sans-serif;">KWD {{number_format($shipping->price,3)}}</p>                            
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
                    </div>
                    
                    
				</div>
			</div>
			 
		</div>
	</div>
	 
     

	</section>
    
    

    
    

    
    
</body>
</html>