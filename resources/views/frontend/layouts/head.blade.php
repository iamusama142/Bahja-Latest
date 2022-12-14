<title>@yield('title')</title>

@yield('meta')

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="https://use.typekit.net/ynl7qpa.css">

<link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">

<link rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}">

<link rel="stylesheet" href="{{asset('frontend/scss/styles.css')}}">
<link rel="stylesheet" href="{{asset('frontend/scss/fontsFace.css')}}">

@if(App::isLocale('ar'))
    <link rel="stylesheet" href="{{asset('frontend/scss/styles-ar.css')}}">
@endif
  
</head>

<style>

    .head-right ul li .logout {

        height: 50px;

        margin-top: 2px;

        background-color: #666;

        -webkit-mask: url(../frontend/assets/images/logout.svg) no-repeat;

        mask: url(../frontend/assets/images/logout.svg) no-repeat;

        mask-position: center;

        mask-size: 28px;

        -webkit-mask-position: center;

        -webkit-mask-size: 28px; }



    .cart {

        width: auto;

        height: auto;

        float: left;

        position: relative;

        padding: 5px 9px;

        margin: 2px 3px;

        background-color: #000;

    }

    /*.cart a {*/

    /*    color: #FFF!important;*/

    /*}*/

    .cart p {

        font-size: 0.8em;

        padding: 0;

        margin: 2px 0;

        color: #FFFFFF !important;

    }

</style>

@stack('styles')

