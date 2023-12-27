<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        http-equiv="Access-Control-Allow-Origin"
        content="*" />
    {{-- <meta name="description" content="bathsoap,washing soap"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>TheFalcon</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('web/assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('web/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    @include('web.layouts.partials.styles')    

    @yield('styles')



</head>

<body>

    {{-- MAIN NAVIGATION BAR --}}
    @include('web.layouts.partials.header')

    {{-- MAIN CONTENT --}}
    <div class="main">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    @include('web.layouts.partials.footer')

    @include('web.layouts.partials.scripts')

    @yield('scripts')

</body>

</html>
