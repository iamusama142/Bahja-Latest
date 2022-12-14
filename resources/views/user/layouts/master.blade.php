<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    @include('frontend.layouts.head')
</head>
<body class="js">

<div class="over-menu"></div>
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>

@include('frontend.layouts.notification')
<!-- Header -->
@include('frontend.layouts.header')
<!--/ End Header -->
<main role="main">
    @yield('main-content')
    @include('frontend.layouts.footer')
</main>
@include('frontend.layouts.end_script')
</body>
</html>
