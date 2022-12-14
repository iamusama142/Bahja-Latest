@extends('backend.layouts.master')
@section('title','Bahja | Area')
@section('main-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Area List</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                
                                                <a href="{{url('admin/area/create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Area</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    {{-- @if(count($banners)>0) --}}
                        <div class="nk-block">
                           
                            <div class="card">
                                <div class="card-inner">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>
                                                Id
                                            </th>
                                            <th>
                                               Area Name
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                        @foreach($area as $aries)
                                        <tr>
                                        <td>{{ $aries->id}}</td>
                                        <td>{{ $aries->name}}</td>
                                        <td><a class="btn btn-primary btn-sm" href="{{url('admin/area/'.$aries->id.'/edit')}}">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="{{url('admin/areadelete/'.$aries->id)}}">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    {{-- @else
                        <h6 class="text-center">No banners found!!! Please create banner</h6>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @push('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
@endpush
@push('scripts')
    {{-- <script>
      $(document).ready(function(){
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                      Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                      )
                  }
              })
          })
      })
  </script> --}}
{{-- @endpush --}}
