<!DOCTYPE html>
<html class="js">
@include('backend.layouts.head')

<body class="nk-body bg-lighter npc-general has-sidebar ">
<div class="nk-app-root">
    <div class="nk-main">
        @include('backend.layouts.sidebar')
        <div class="nk-wrap">
            @include('backend.layouts.header')
            @yield('main-content')
            @include('backend.layouts.footer')
        </div>
    </div>
</div>
@include('backend.layouts.notification')
@include('backend.layouts.end_footer')
</body>

</html>
