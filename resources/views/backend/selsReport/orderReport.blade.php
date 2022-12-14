
@extends('backend.layouts.master')
@section('title','Bahja | Product')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <!-- Google Font: Source Sans Pro -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> --}}
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
  </nav>
  <!-- /.navbar -->

 
  

  <!-- Content Wrapper. Contains page content -->
   <!-- Content Header (Page header) -->
  <div class="content-wrapper" style="margin-left: 0;">
   
    <!-- <section class="content-header">
      <div class="container-fluid"> -->
        <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div> -->
     
      <!-- /.container-fluid -->
   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h5 class="mt-5">Order Report</h5>
                <div>
                  <form action="datesearch" method="POST">
                    @csrf
                  start &nbsp;<input type="date" name="sdate"/>&nbsp;To &nbsp;<input type="date" name="endate"/>
                  &nbsp;<button type="submit" class="btn btn-primary">go</button>
                  </form>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Order No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Quantity</th>
                    <th>Charge</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                    
                  </tr>
                  </thead>
                 <tbody>
                  @foreach($orders as $order)
                  @php
                  $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
                 
                  @endphp
                  
                  <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->first_name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->quantity}}</td>
                    <td> @foreach($shipping_charge as $data)
                      {{number_format($data,2)}}
                      @endforeach</td>
                    <td>{{number_format($order->total_amount,2)}}</td>
                    @if($order->status=='new')
                    <td class="text-primary">{{$order->status}}</td>
                    @elseif($order->status=='process')
                    <td class="text-warning">{{$order->status}}</td>
                    @elseif($order->status=='delivered')
                    <td class="text-success">{{$order->status}}</td>
                    @else
                    <td class="text-danger">{{$order->status}}</td>
                    @endif
                    <td>{{($order->created_at)->format('d/m/Y')}}</td>
                   
                  </tr>
                  @endforeach
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> -->
<!-- <script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script> -->
<!-- <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="../../dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
     
      "searching": false,
      
      
    });
  });
</script>
</body>
</html>
@endsection