@extends('backend.layouts.master')
@section('title', 'Bahja | Product')
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
                                        <h5 class="mt-5">Order List</h5>
                                        <div>
                                            <form action="datesearch" method="POST">
                                                @csrf
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4">Start : <input type="date"
                                                                class="form-control" name="sdate" /> </div>
                                                        <div class="col-md-4">To : <input type="date"
                                                                class="form-control" name="endate" /></div>
                                                        <div class="col-md-4"><button type="submit"
                                                                class="btn btn-primary mt-4">go</button></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <hr>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <!-- <th classs ="sorting sorting_desc">S.N</th> -->
                                                    {{-- <th style="display:none"><span>S.N</span></th> --}}
                                                    <th>SN</th>
                                                    <th>Date</th>
                                                    <th>Order No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Payment Method</th>
                                                    <th>Shipping Charge</th>
                                                    <th>Total Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    @php
                                                        $shipping_charge = DB::table('shippings')
                                                            ->where('id', $order->shipping_id)
                                                            ->pluck('price');
                                                        
                                                    @endphp

                                                    <tr>
                                                        {{-- <td style="display:none"></td> --}}
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                                        <td>{{ $order->order_number }}</td>
                                                        <td>{{ $order->first_name }}</td>
                                                        <td>{{ $order->email }}</td>
                                                        <td>{{ $order->payment_method }}</td>
                                                        <td>
                                                            @foreach ($shipping_charge as $data)
                                                                {{ $data }} KWD
                                                            @endforeach
                                                        </td>
                                                        <td>{{ $order->total_amount }} KWD</td>
                                                        @if ($order->status == 'new')
                                                            <td class="text-primary">{{ $order->status }}</td>
                                                        @elseif($order->status == 'process')
                                                            <td class="text-warning">{{ $order->status }}</td>
                                                        @elseif($order->status == 'delivered')
                                                            <td class="text-success">{{ $order->status }}</td>
                                                        @else
                                                            <td class="text-danger">{{ $order->status }}</td>
                                                        @endif
                                                        <td><a href="{{ route('order.show', $order->id) }}"><em
                                                                    class="icon ni ni-eye"></em></a>
                                                            <a href="{{ route('order.edit', $order->id) }}"><em
                                                                    class="icon ni ni-edit"></em></a>
                                                            <a href="{{ route('delete', $order->id) }}"><em
                                                                    class="icon ni ni-trash"></em></a>
                                                        </td>
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
        <!-- <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> -->
        <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../plugins/jszip/jszip.min.js"></script>
        <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="../../dist/js/demo.js"></script> -->
        <!-- Page specific script -->
        <script>
            $(function() {
                
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
            
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });


            $('.sorting').DataTable({
                "ordering": false
            });
        </script>
    </body>

    </html>
@endsection
