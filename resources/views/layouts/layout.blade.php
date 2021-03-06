<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
          rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cookie_panel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu_buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @yield('additional_styles')
    {{--    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="stub"></div>
@include('parts.header')

<div class="content">
    @yield('content')
</div>

@include('parts.footer')

@if (Cookie::get('role') && empty(Cookie::get('accept_cookies')))
    @include('parts.cookie_panel')
@endif

<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?sensor=false&amp;language=ru&amp;key=AIzaSyDCmaW-bZ1w8Zw96ZypHS7gSCXxI1oI12Q"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@yield('additional_scripts')
</body>
</html>