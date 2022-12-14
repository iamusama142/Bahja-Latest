@extends('backend.layouts.master')
@section('main-content')
    <div class="container-fluid">
        <iframe src="/laravel-filemanager" style="width: 100%; height: 90vh; overflow: hidden; border: none; margin-top: 75px"></iframe>
    </div>
@endsection
@push('styles')
    <style>
        #main #alerts{
            display: none;
        }
    </style>
@endpush
