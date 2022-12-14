@extends('user.layouts.master')

@section('title','Bahja | Address')

@section('main-content')

    <section class="inner-page">

        <section class="shopping-cart">

            <div class="container">

                <div class="row">

                    <div class="col-12 page-head">

                        <h2 class="mb-3 mt-4 ">{{__('Addresses')}}</h2>

                    </div>

                </div>

                <div class="row account-cont">

                    @include('user.layouts.sidebar')

                    <div class="col-lg-8 col-xl-9 account-right">

                        <table class="table table-borderless table-hover table-responsive-md bg-light orders-table">

                            <thead>

                            <tr>

                                <th class="py-4 text-uppercase text-sm">{{__('Id')}}</th>

                                <th class="py-4 text-uppercase text-sm">{{__('Address Name')}}</th>

                                <th class="py-4 text-uppercase text-sm">{{__('Deliver To')}}</th>

                                <th class="py-4 text-uppercase text-sm">{{__('Block')}}</th>

                                <th class="py-4 text-uppercase text-sm">{{__('Action')}}</th>

                            </tr>

                            </thead>

                            <tbody>

                                @if(count($addresses)>0)

                                    @foreach($addresses as $data)

                                        <tr>

                                            <th class="py-4 align-middle"><a href="{{route('address.show',$data->id)}}"># {{$data->id}}</a></th>

                                            <th class="py-4 align-middle">{{$data->address_name}} </th>

                                            <th class="py-4 align-middle">{{$data->user_name}} </th>

                                            <th class="py-4 align-middle">{{$data->block}} </th>


                                            <td class="py-4 align-middle" style="display: flex;">

                                                <a class="btn btn-outline-dark btn-sm invoice-btn" href="{{route('address.edit',$data->id)}}">Edit</a>

                                                <form method="POST" action="{{route('address.destroy',[$data->id])}}" id="deleteAddress">

                                                    @csrf

                                                    <a href="#" class="dltBtn btn btn-outline-dark btn-sm invoice-btn" style="margin-left: 10px;">

                                                        <em class="icon ni ni-trash"></em><span>{{__('Delete')}}</span>

                                                    </a>

                                                    @method('delete')

                                                </form>

                                            </td>



                                        </tr>

                                    @endforeach

                                @else

                                    <td colspan="8" class="text-center"><h4 class="my-4">{{__('You have no Address yet')}}!!</h4></td>

                                @endif

                            </tbody>

                        </table>

                        <div class="form-group mt-3 text-right">

                            <a href="{{route('address.create')}}" class="btn btn-outline-dark">

                                <i class="fa fa-plus mr-2"></i>

                                {{__('Add New Address')}}

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </section>

@endsection



@push('scripts')

    <script>

        $(document).ready(function(){

            $('.dltBtn').click(function(e){

                e.preventDefault();

                let delete_status = confirm("are you sure you want to delete");

                if(delete_status){

                    $('#deleteAddress').submit();

                }

            })

        })

    </script>

@endpush

