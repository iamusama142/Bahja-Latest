<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
{{--    <link rel="shortcut icon" href="{{}}">--}}
    <link rel="stylesheet" href="{{asset('backend/css/dashlite.css?ver=3.0.3')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('backend/css/theme.css?ver=3.0.3')}}">
    <link href="{{asset('frontend/css/snackbar.min.css')}}" rel="stylesheet">
    
    @stack('styles')
    <style>
        .icon-status-info.not-active:after{
            background: rgb(0 0 0 / 0%) !important;
            border: unset;
        }
        .nk-menu-item.dashboard.active .nk-menu-link {
            color: #526484 !important;
            background: unset !important;
        }
        .nk-menu-item.dashboard.active .nk-menu-icon {
            color: #526484 !important;
        }
    </style>
</head>
