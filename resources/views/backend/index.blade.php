@extends('backend.layouts.master')

@section('title','Bahja | Dashboard')

@section('main-content')

    @include('backend.layouts.notification')

    <div class="nk-content ">

        <div class="container-fluid">

            <div class="nk-content-inner">

                <div class="nk-content-body">

                    <div class="nk-block-head nk-block-head-sm">

                        <div class="nk-block-between">

                            <div class="nk-block-head-content">

                                <h4 class="nk-block-title page-title">Dashboard</h4>

                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->

                    </div><!-- .nk-block-head -->

                    <div class="nk-block">

                        <div class="row g-gs">

                            <div class="col-xxl-12">

                                <div class="row g-gs">

                                @php
                                    $prev_month_sales = \App\Models\Order::prevMonthSales();
                                    $curr_month_sales = \App\Models\Order::currentMonthSales();
                                    if($prev_month_sales){
                                        $verses_sales = round((($curr_month_sales / $prev_month_sales) * 100),2);
                                    }
                                @endphp
        
                                <div class="col-xxl-4 col-md-4">
                                    <div class="card is-dark h-100">
                                        <div class="nk-ecwg nk-ecwg1">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total Sales</h6>
                                                    </div>
                                                    <div class="card-tools">
                                                        {{-- <a href="#" class="link">View Report</a> --}}
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="amount">{{\App\Models\Order::totalSales()}} KWD
                                                    </div>
                                                    <div class="info"><strong>Previous Month</strong> {{ $prev_month_sales }} KWD
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <h6 class="sub-title">This Month So Far</h6>
                                                    <div class="data-group">
                                                        <div class="amount">
                                                            {{ $curr_month_sales }} KWD
                                                        </div><div class="info text-end">
                                                            <span class="change up text-danger"><em class="icon ni ni-star"></em>{{$verses_sales}}%</span><br><span>vs. Last Month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-ecwg1-ck"><div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand"><div class="">
                                                    </div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas class="ecommerce-line-chart-s1 chartjs-render-monitor" id="totalSales" style="display: block; width: 500px; height: 110px;" width="500" height="110"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-8 col-md-8">

                                        <div class="card card-full">
        
                                            <div class="nk-ecwg nk-ecwg8 h-100">
        
                                                <div class="card-inner">
        
                                                    <div class="card-title-group mb-3">
        
                                                        <div class="card-title">
        
                                                            <h6 class="title">Sales Trends Between Dates </h6>
                                                            From : <input type="date" id="from" value="<?php echo date("Y-").'01-'.'01';?>"> To : <input type="date" id="to" value="<?php echo date("Y-m-d");?>"> <button id="show-trends" class="btn btn-sm btn-light">show</button>
                                                        </div>
        
                                                    </div>
        
                                                    <!-- <ul class="nk-ecwg8-legends">
        
                                                        <li>
        
                                                            <div class="title">
        
                                                                <span class="dot dot-lg sq" data-bg="#6576ff"></span>
        
                                                                <span>Total Order</span>
        
                                                            </div>
        
                                                        </li>
        
                                                        <li>
        
                                                            <div class="title">
        
                                                                <span class="dot dot-lg sq" data-bg="#eb6459"></span>
        
                                                                <span>Cancelled Order</span>
        
                                                            </div>
        
                                                        </li>
        
                                                    </ul> -->
        
                                                    <div class="nk-ecwg8-ck">
        
                                                        <canvas class="ecommerce-line-chart-s4" id="sales-trends-range"></canvas>
        
                                                    </div>
        
                                                </div><!-- .card-inner -->
        
                                            </div>
        
                                        </div><!-- .card -->
        
                                    </div><!-- .col -->


                                    <div class="col-xxl-3 col-md-3">

                                        <div class="card">

                                            <div class="nk-ecwg nk-ecwg3">

                                                <div class="card-inner pb-0">

                                                    <div class="card-title-group">

                                                        <div class="card-title">

                                                            <h6 class="title">Orders</h6>

                                                        </div>

                                                    </div>

                                                    <div class="data">

                                                        <div class="data-group">

                                                            <div class="amount">{{\App\Models\Order::countActiveOrder()}}</div>

                                                        </div>

                                                    </div>

                                                </div><!-- .card-inner -->

                                            </div><!-- .nk-ecwg -->

                                        </div><!-- .card -->

                                    </div>

                                    <div class="col-xxl-3 col-md-3">

                                        <div class="card">

                                            <div class="nk-ecwg nk-ecwg3">

                                                <div class="card-inner pb-0">

                                                    <div class="card-title-group">

                                                        <div class="card-title">

                                                            <h6 class="title">Customer</h6>

                                                        </div>

                                                    </div>

                                                    <div class="data">

                                                        <div class="data-group">

                                                            <div class="amount">{{\App\Models\User::countActiveUser()}}</div>

                                                        </div>

                                                    </div>

                                                </div><!-- .card-inner -->

                                            </div><!-- .nk-ecwg -->

                                        </div><!-- .card -->

                                    </div>

                                    <div class="col-xxl-3 col-md-3">

                                        <div class="card">

                                            <div class="nk-ecwg nk-ecwg3">

                                                <div class="card-inner pb-0">

                                                    <div class="card-title-group">

                                                        <div class="card-title">

                                                            <h6 class="title">Products</h6>

                                                        </div>

                                                    </div>

                                                    <div class="data">

                                                        <div class="data-group">

                                                            <div class="amount">{{\App\Models\Product::countActiveProduct()}}</div>

                                                        </div>

                                                    </div>

                                                </div><!-- .card-inner -->



                                            </div><!-- .nk-ecwg -->

                                        </div><!-- .card -->

                                    </div>

                                    <div class="col-xxl-3 col-md-3">

                                        <div class="card">

                                            <div class="nk-ecwg nk-ecwg3">

                                                <div class="card-inner pb-0">

                                                    <div class="card-title-group">

                                                        <div class="card-title">

                                                            <h6 class="title">Category</h6>

                                                        </div>

                                                    </div>

                                                    <div class="data">

                                                        <div class="data-group">

                                                            <div class="amount">{{\App\Models\Category::countActiveCategory()}}</div>

                                                        </div>

                                                    </div>

                                                </div><!-- .card-inner -->



                                            </div><!-- .nk-ecwg -->

                                        </div><!-- .card -->

                                    </div>

                                </div>

                            </div><!-- .col -->

                            <div class="col-xxl-6">

                                <div class="card card-full">

                                    <div class="nk-ecwg nk-ecwg8 h-100">

                                        <div class="card-inner">

                                            <div class="card-title-group mb-3">

                                                <div class="card-title">

                                                    <h6 class="title">Sales Trends Current Year {{ date('Y') }}</h6>

                                                </div>

                                            </div>

                                            <!-- <ul class="nk-ecwg8-legends">

                                                <li>

                                                    <div class="title">

                                                        <span class="dot dot-lg sq" data-bg="#6576ff"></span>

                                                        <span>Total Order</span>

                                                    </div>

                                                </li>

                                                <li>

                                                    <div class="title">

                                                        <span class="dot dot-lg sq" data-bg="#eb6459"></span>

                                                        <span>Cancelled Order</span>

                                                    </div>

                                                </li>

                                            </ul> -->

                                            <div class="nk-ecwg8-ck">

                                                <canvas class="ecommerce-line-chart-s4" id="sales-trends-curr-year"></canvas>

                                            </div>

                                        </div><!-- .card-inner -->

                                    </div>

                                </div><!-- .card -->

                            </div><!-- .col -->
                            
                            <div class="col-xxl-6">

                                <div class="card card-full">

                                    <div class="nk-ecwg nk-ecwg8 h-100">

                                        <div class="card-inner">

                                            <div class="card-title-group mb-3">

                                                <div class="card-title">

                                                    <h6 class="title">Sales Statistics 
                                                        <select name="year" id="year">
                                                            @for ($i = 2020; $i <= date('Y'); $i++)
                                                                <option value="{{$i}}" @if ($i == date('Y')) {{ 'selected' }} @endif>{{$i}}</option>
                                                            @endfor
                                                        </select>

                                                        <select name="type" id="type">
                                                            <option value="weekly">Weekly</option>
                                                            <option value="monthly" selected>Monthly</option>
                                                            <option value="yearly">Yearly</option>
                                                        </select>
                                                   </h6> 

                                                </div>

                                            </div>

                                            <!-- <ul class="nk-ecwg8-legends">

                                                <li>

                                                    <div class="title">

                                                        <span class="dot dot-lg sq" data-bg="#6576ff"></span>

                                                        <span>Total Order</span>

                                                    </div>

                                                </li>

                                                <li>

                                                    <div class="title">

                                                        <span class="dot dot-lg sq" data-bg="#eb6459"></span>

                                                        <span>Cancelled Order</span>

                                                    </div>

                                                </li>

                                            </ul> -->

                                            <div class="nk-ecwg8-ck">

                                                <canvas class="ecommerce-line-chart-s4" id="dynamic-sales-chart"></canvas>

                                            </div>

                                        </div><!-- .card-inner -->

                                    </div>

                                </div><!-- .card -->

                            </div><!-- .col -->


                            <!-- <div class="col-xxl-6">

                                <div class="card card-full overflow-hidden">

                                    <div class="nk-ecwg nk-ecwg4 h-100">

                                        <div class="card-inner flex-grow-1">

                                            <div class="card-title-group mb-4">

                                                <div class="card-title">

                                                    <h6 class="title">Traffic</h6>

                                                </div>

                                            </div>

                                            <div class="data-group">

                                                <div class="nk-ecwg4-ck">

                                                    <div class="ecommerce-doughnut-s1" id="pie_chart" style="width:350px; height:320px;"></div>

                                                </div>

                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div> -->

                            <div class="col-xxl-6">

                                <div class="card card-full">

                                    <div class="card-inner">

                                        <div class="card-title-group">

                                            <div class="card-title">

                                                <h6 class="title">Recent Orders</h6>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="nk-tb-list mt-n2">

                                        <div class="nk-tb-item nk-tb-head">

                                            <div class="nk-tb-col"><span>Order No.</span></div>

                                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>

                                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>

                                            <div class="nk-tb-col"><span>Amount</span></div>

                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>

                                        </div>

                                        @php

                                            $recentOrder = \App\Models\Order::recentOrder();

                                        @endphp

                                        @if(isset($recentOrder))

                                            @foreach($recentOrder as $_recentOrder)

                                                <div class="nk-tb-item">

                                                <div class="nk-tb-col">
                                                    
                                                    <span class="tb-lead"><a href="{{route('order.show',$_recentOrder->id)}}">#{{ $_recentOrder->order_number  }}</a></span>

                                                </div>

                                                <div class="nk-tb-col tb-col-sm">

                                                    <div class="user-card">

                                                        <div class="user-name">

                                                            <span class="tb-lead">{{ $_recentOrder->first_name  }}</span>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="nk-tb-col tb-col-md">

                                                    <span class="tb-sub">{{ $_recentOrder->created_at  }}</span>

                                                </div>

                                                <div class="nk-tb-col">

                                                    <span class="tb-sub tb-amount">{{ $_recentOrder->total_amount }} </span>

                                                </div>

                                                @if($_recentOrder->status=='new')

                                                    <div class="nk-tb-col">

                                                        <span class="badge badge-dot badge-dot-xs bg-primary">{{ $_recentOrder->status }}</span>

                                                    </div>

                                                @elseif($_recentOrder->status=='process')

                                                    <div class="nk-tb-col">

                                                        <span class="badge badge-dot badge-dot-xs bg-warning">{{ $_recentOrder->status }}</span>

                                                    </div>

                                                @elseif($_recentOrder->status=='delivered')

                                                    <div class="nk-tb-col">

                                                        <span class="badge badge-dot badge-dot-xs bg-success">{{ $_recentOrder->status }}</span>

                                                    </div>

                                                @else

                                                    <div class="nk-tb-col">

                                                        <span class="badge badge-dot badge-dot-xs bg-danger">{{ $_recentOrder->status }}</span>

                                                    </div>

                                                @endif

                                            </div>

                                            @endforeach

                                        @endif

                                    </div>

                                </div><!-- .card -->

                            </div>

                            
                            <div class="col-xxl-6">

                                <div class="card card-full">

                                    <div class="card-inner">

                                        <div class="card-title-group">

                                            <div class="card-title">

                                                <h6 class="title">New Orders</h6>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="nk-tb-list mt-n2">

                                        <div class="nk-tb-item nk-tb-head">

                                            <div class="nk-tb-col"><span>Order No.</span></div>

                                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>

                                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>

                                            <div class="nk-tb-col"><span>Amount</span></div>

                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>

                                        </div>

                                        @php

                                            $newOrder = \App\Models\Order::newOrder();

                                        @endphp

                                        @if(isset($newOrder))

                                            @foreach($newOrder as $_newOrder)

                                                <div class="nk-tb-item">

                                                <div class="nk-tb-col">

                                                    <span class="tb-lead"><a href="{{route('order.show',$_recentOrder->id)}}">#{{ $_newOrder->order_number  }}</a></span>

                                                </div>

                                                <div class="nk-tb-col tb-col-sm">

                                                    <div class="user-card">

                                                        <div class="user-name">

                                                            <span class="tb-lead">{{ $_newOrder->first_name  }}</span>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="nk-tb-col tb-col-md">

                                                    <span class="tb-sub">{{ $_newOrder->created_at  }}</span>

                                                </div>

                                                <div class="nk-tb-col">

                                                    <span class="tb-sub tb-amount">{{ $_newOrder->total_amount }} </span>

                                                </div>

                                                @if($_newOrder->status=='new')

                                                    <div class="nk-tb-col">

                                                        <span class="badge badge-dot badge-dot-xs bg-primary">{{ $_newOrder->status }}</span>

                                                    </div>

                                                @elseif($_newOrder->status=='process')

                                                    <div class="nk-tb-col">

                                                        <span class="badge badge-dot badge-dot-xs bg-warning">{{ $_newOrder->status }}</span>

                                                    </div>

                                                @elseif($_newOrder->status=='delivered')

                                                    <div class="nk-tb-col">

                                                        <span class="badge badge-dot badge-dot-xs bg-success">{{ $_newOrder->status }}</span>

                                                    </div>

                                                @else

                                                    <div class="nk-tb-col">

                                                        <span class="badge badge-dot badge-dot-xs bg-danger">{{ $_newOrder->status }}</span>

                                                    </div>

                                                @endif

                                            </div>

                                            @endforeach

                                        @endif

                                    </div>

                                </div><!-- .card -->

                            </div>

                            


                            <div class="col-xxl-4 col-md-6">

                            </div><!-- .col -->

                        </div><!-- .row -->

                        

                    </div><!-- .nk-block -->

                </div>

            </div>

        </div>

    </div>

@endsection

@push('scripts')



    

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}

    {{-- <script type="text/javascript">

        var analytics = <?php //echo $users; ?>



        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);



        function drawChart()

        {

            var data = google.visualization.arrayToDataTable(analytics);

            var options = {

                title : 'Last 7 Days registered user'

            };

            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));

            chart.draw(data, options);

        }

    </script> --}}

    {{-- charts --}}

<script type="text/javascript">
    
const url = "{{route('product.order.income')}}";

// Set new default font family and font color to mimic Bootstrap's default styling

Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';

Chart.defaults.global.defaultFontColor = '#858796';



function number_format(number, decimals, dec_point, thousands_sep) {

    // *     example: number_format(1234.56, 2, ',', ' ');

    // *     return: '1 234,56'

    number = (number + '').replace(',', '').replace(' ', '');

    var n = !isFinite(+number) ? 0 : +number,

        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),

        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,

        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,

        s = '',

        toFixedFix = function (n, prec) {

            var k = Math.pow(10, prec);

            return '' + Math.round(n * k) / k;

        };

    // Fix for IE parseFloat(0.55).toFixed(0) = 0;

    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');

    if (s[0].length > 3) {

        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);

    }

    if ((s[1] || '').length < prec) {

        s[1] = s[1] || '';

        s[1] += new Array(prec - s[1].length + 1).join('0');

    }

    return s.join(dec);

}




// Sales Trends Range

var SalesTrendsRangeChart;

var ctx_sales_trends_range = document.getElementById("sales-trends-range");

let from = document.querySelector('#from').value;
let to = document.querySelector('#to').value;
let durl = `${url}/x/x/${from}/${to}`;

axios.get(durl)

    .then(function (response) {

        const data_keys = Object.keys(response.data);


        const data_values = Object.values(response.data);


            SalesTrendsRangeChart = new Chart(ctx_sales_trends_range, {

            type: 'line',

            data: {

                labels: data_keys, // ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],

                datasets: [{

                    label: "Earnings",

                    lineTension: 0.2,

                    backgroundColor: "rgba(78, 115, 223, 0.05)",

                    borderColor: "#1ee0ac",

                    pointRadius: 3,

                    pointBackgroundColor: "rgba(78, 115, 223, 1)",

                    pointBorderColor: "rgba(78, 115, 223, 1)",

                    pointHoverRadius: 3,

                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",

                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",

                    pointHitRadius: 10,

                    pointBorderWidth: 2,

                    data: data_values,// [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],

                }],

            },

            options: {

                maintainAspectRatio: false,

                layout: {

                    padding: {

                        left: 10,

                        right: 25,

                        top: 25,

                        bottom: 0

                    }

                },

                scales: {

                    xAxes: [{

                        time: {

                            unit: 'date'

                        },

                        gridLines: {

                            display: false,

                            drawBorder: false

                        },

                        ticks: {

                            maxTicksLimit: 12

                        }

                    }],

                    yAxes: [{

                        ticks: {

                            maxTicksLimit: 6,

                            padding: 10,

                            // Include a dollar sign in the ticks

                            callback: function (value, index, values) {

                                return 'KWD ' + number_format(value);

                            }

                        },

                        gridLines: {

                            color: "rgb(234, 236, 244)",

                            zeroLineColor: "rgb(234, 236, 244)",

                            drawBorder: false,

                            borderDash: [2],

                            zeroLineBorderDash: [2]

                        }

                    }],

                },

                legend: {

                    display: false

                },

                tooltips: {

                    backgroundColor: "rgb(255,255,255)",

                    bodyFontColor: "#858796",

                    titleMarginBottom: 10,

                    titleFontColor: '#6e707e',

                    titleFontSize: 14,

                    borderColor: '#dddfeb',

                    borderWidth: 1,

                    xPadding: 15,

                    yPadding: 15,

                    displayColors: false,

                    intersect: false,

                    mode: 'index',

                    caretPadding: 10,

                    callbacks: {

                        label: function (tooltipItem, chart) {

                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';

                            return datasetLabel + ': KWD ' + number_format(tooltipItem.yLabel);

                        }

                    }

                }

            }

        });

    })

    .catch(function (error) {

        //   vm.answer = 'Error! Could not reach the API. ' + error

        console.log(error)

    });

document.querySelector('#show-trends').addEventListener("click", function (e) {

    
let from = document.querySelector('#from').value;
let to = document.querySelector('#to').value;

if(from == '' || to == ''){
    alert('please select a date range');
    return false;
}

let durl = `${url}/x/x/${from}/${to}`;

console.log(durl);

axios.get(durl)
    .then(function (response) {

        const data_keys = Object.keys(response.data);
        const data_values = Object.values(response.data);
        SalesTrendsRangeChart.data.labels = data_keys;
        SalesTrendsRangeChart.data.datasets[0].data = data_values;
        SalesTrendsRangeChart.update();

    })
    .catch(function (error) {

        //   vm.answer = 'Error! Could not reach the API. ' + error

        console.log(error)

    });
});


// Sales Trends Range End  --




// Sales Trends Current Year

var ctx_sales_trends_cy = document.getElementById("sales-trends-curr-year");



axios.get(url)

    .then(function (response) {

        const data_keys = Object.keys(response.data);


        const data_values = Object.values(response.data);


        var SalesTrendsCurrentChart = new Chart(ctx_sales_trends_cy, {

            type: 'line',

            data: {

                labels: data_keys, // ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],

                datasets: [{

                    label: "Earnings",

                    lineTension: 0,

                    backgroundColor: "rgba(78, 115, 223, 0.05)",

                    borderColor: "rgba(78, 115, 223, 1)",

                    pointRadius: 3,

                    pointBackgroundColor: "rgba(78, 115, 223, 1)",

                    pointBorderColor: "rgba(78, 115, 223, 1)",

                    pointHoverRadius: 3,

                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",

                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",

                    pointHitRadius: 10,

                    pointBorderWidth: 2,

                    data: data_values,// [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],

                }],

            },

            options: {

                maintainAspectRatio: false,

                layout: {

                    padding: {

                        left: 10,

                        right: 25,

                        top: 25,

                        bottom: 0

                    }

                },

                scales: {

                    xAxes: [{

                        time: {

                            unit: 'date'

                        },

                        gridLines: {

                            display: false,

                            drawBorder: false

                        },

                        ticks: {

                            maxTicksLimit: 12

                        }

                    }],

                    yAxes: [{

                        ticks: {

                            maxTicksLimit: 6,

                            padding: 10,

                            // Include a dollar sign in the ticks

                            callback: function (value, index, values) {

                                return 'KWD ' + number_format(value);

                            }

                        },

                        gridLines: {

                            color: "rgb(234, 236, 244)",

                            zeroLineColor: "rgb(234, 236, 244)",

                            drawBorder: false,

                            borderDash: [2],

                            zeroLineBorderDash: [2]

                        }

                    }],

                },

                legend: {

                    display: false

                },

                tooltips: {

                    backgroundColor: "rgb(255,255,255)",

                    bodyFontColor: "#858796",

                    titleMarginBottom: 10,

                    titleFontColor: '#6e707e',

                    titleFontSize: 14,

                    borderColor: '#dddfeb',

                    borderWidth: 1,

                    xPadding: 15,

                    yPadding: 15,

                    displayColors: false,

                    intersect: false,

                    mode: 'index',

                    caretPadding: 10,

                    callbacks: {

                        label: function (tooltipItem, chart) {

                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';

                            return datasetLabel + ': KWD ' + number_format(tooltipItem.yLabel);

                        }

                    }

                }

            }

        });

    })

    .catch(function (error) {

        //   vm.answer = 'Error! Could not reach the API. ' + error

        console.log(error)

    });

// Sales Trends Current Year End  --


//Sales Dynamic Chart


var ctx_dynamic_sales = document.getElementById("dynamic-sales-chart");

var salesDynamicChart;

document.querySelector('#type').addEventListener("change", function (e) {

    let type = e.target.value;
    let year = document.querySelector('#year').value;
    let durl = `${url}/${year}/${type}`;

    if (type == 'yearly') {
        document.querySelector('#year').setAttribute("disabled", true);
    }
    else {
        document.querySelector('#year').removeAttribute("disabled");
    }

    console.log(durl);

    axios.get(durl)
        .then(function (response) {

            const data_keys = Object.keys(response.data);
            const data_values = Object.values(response.data);
            salesDynamicChart.data.labels = data_keys;
            salesDynamicChart.data.datasets[0].data = data_values;
            salesDynamicChart.update();

        })
        .catch(function (error) {

            //   vm.answer = 'Error! Could not reach the API. ' + error

            console.log(error)

        });
});



document.querySelector('#year').addEventListener("change", function (e) {

    let year = e.target.value;
    let type = document.querySelector('#type').value;
    let durl = `${url}/${year}/${type}`;

    console.log(durl);

    axios.get(durl)
        .then(function (response) {

            const data_keys = Object.keys(response.data);
            const data_values = Object.values(response.data);
            salesDynamicChart.data.labels = data_keys;
            salesDynamicChart.data.datasets[0].data = data_values;
            salesDynamicChart.update();

        })
        .catch(function (error) {

            //   vm.answer = 'Error! Could not reach the API. ' + error

            console.log(error)

        });
});

axios.get(url)

    .then(function (response) {

        const data_keys = Object.keys(response.data);

        const data_values = Object.values(response.data);

        salesDynamicChart = new Chart(ctx_dynamic_sales, {

            type: 'bar',

            data: {

                labels: data_keys, // ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],

                datasets: [{

                    label: "Earnings",
                    lineTension: 0,
                    borderColor: '#FFFFFF',
                    backgroundColor: '#3a2272',
                    data: data_values,// [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
                }],

            },

            options: {

                maintainAspectRatio: false,

                layout: {

                    padding: {

                        left: 10,

                        right: 25,

                        top: 25,

                        bottom: 0

                    }

                },

                scales: {

                    xAxes: [{

                        time: {

                            unit: 'date'

                        },

                        gridLines: {

                            display: false,

                            drawBorder: false

                        },

                        ticks: {

                            maxTicksLimit: 28

                        }

                    }],

                    yAxes: [{

                        ticks: {

                            maxTicksLimit: 6,

                            padding: 10,

                            // Include a dollar sign in the ticks

                            callback: function (value, index, values) {

                                return 'KWD ' + number_format(value);

                            }

                        },

                        gridLines: {

                            color: "rgb(234, 236, 244)",

                            zeroLineColor: "rgb(234, 236, 244)",

                            drawBorder: false,

                            borderDash: [2],

                            zeroLineBorderDash: [2]

                        }

                    }],

                },

                legend: {

                    display: false

                },

                tooltips: {

                    backgroundColor: "rgb(255,255,255)",

                    bodyFontColor: "#858796",

                    titleMarginBottom: 10,

                    titleFontColor: '#6e707e',

                    titleFontSize: 14,

                    borderColor: '#dddfeb',

                    borderWidth: 1,

                    xPadding: 15,

                    yPadding: 15,

                    displayColors: false,

                    intersect: false,

                    mode: 'index',

                    caretPadding: 10,

                    callbacks: {

                        label: function (tooltipItem, chart) {

                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';

                            return datasetLabel + ': KWD ' + number_format(tooltipItem.yLabel);

                        }

                    }

                }

            }

        });

    })

    .catch(function (error) {

        //   vm.answer = 'Error! Could not reach the API. ' + error

        console.log(error)

    });

//Dynamic Chart End --

// Total Sales Chart


var total_sales_ctx = document.getElementById("totalSales");

axios.get(url)

    .then(function (response) {

        const data_keys = Object.keys(response.data);
        const data_values = Object.values(response.data);



        var totalSalesChart = new Chart(total_sales_ctx, {

            type: 'line',

            data: {

                labels: data_keys, // ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{

                    label: "Sales",

                    lineTension: 0.2,

                    backgroundColor: "rgba(82, 54, 149, 1)",

                    borderColor: "rgba(78, 115, 223, 1)",

                    borderWidth: 2,

                    pointRadius: 0,

                    pointBackgroundColor: "rgba(78, 115, 223, 1)",

                    pointBorderColor: "rgba(78, 115, 223, 1)",

                    pointHoverRadius: 3,

                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",

                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",

                    pointHitRadius: 10,

                    pointBorderWidth: 2,

                    data: data_values,// [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],

                }],

            },

            options: {

                maintainAspectRatio: false,

                layout: {

                    padding: {

                        left: 10,

                        right: 25,

                        top: 25,

                        bottom: 0

                    }

                },

                scales: {

                    xAxes: [{

                        time: {

                            unit: 'date'

                        },

                        gridLines: {

                            display: false,

                            drawBorder: false

                        },

                        ticks: {

                            maxTicksLimit: 12,
                            display: false,

                        }

                    }],

                    yAxes: [{

                        ticks: {

                            display: false,

                            maxTicksLimit: 6,

                            padding: 10,

                            // Include a dollar sign in the ticks

                            callback: function (value, index, values) {

                                return 'KWD ' + number_format(value);

                            }

                        },

                        gridLines: {
                            display: false,

                            // color: "rgb(234, 236, 244)",

                            zeroLineColor: "rgb(234, 236, 244)",

                            drawBorder: false,

                            // borderDash: [2],

                            // zeroLineBorderDash: [2]

                        }

                    }],

                },

                legend: {

                    display: false

                },

                tooltips: {

                    backgroundColor: "rgb(255,255,255)",

                    bodyFontColor: "#858796",

                    titleMarginBottom: 10,

                    titleFontColor: '#6e707e',

                    titleFontSize: 14,

                    borderColor: '#dddfeb',

                    borderWidth: 1,

                    xPadding: 15,

                    yPadding: 15,

                    displayColors: false,

                    intersect: false,

                    mode: 'index',

                    caretPadding: 10,

                    callbacks: {

                        label: function (tooltipItem, chart) {

                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';

                            return datasetLabel + ': KWD ' + number_format(tooltipItem.yLabel);

                        }

                    }

                }

            }

        });


    }).catch(function (error) {

        console.log(error)

    });

   // Total Sales Chart End --
</script>

 

@endpush

