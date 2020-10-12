<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="{{ app()->getLocale() }}">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="{{ config('site.author') }}">
    <title> @yield('title') - {{ config('app.name') }}</title>
    <link rel="apple-touch-icon" sizes="432x512" href="{{ asset('assets/img/logo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="432x512" href="{{ asset('assets/img/logo/logo.png') }}">
    <link rel="manifest" href="{{ asset('assets/manifest/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/logo/logo.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/coreui/css/coreui.min.css') }}" rel="stylesheet">
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('assets/lib/toastr/toastr.min.css') }}">
    <!-- font awesome basic kit -->
    <script src="https://kit.fontawesome.com/91c858ef37.js" crossorigin="anonymous"></script>
    @stack('css')
</head>

<body class="c-app flex-row align-items-center">
    @yield('content')
    <!-- Jquery -->
    <script src="{{ asset('assets/lib/jquery/jquery-3.5.1.min.js') }}"></script>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/coreui/js/coreui.bundle.min.js') }}"></script>
    <!-- toastr -->
    <script src="{{ asset('assets/lib/toastr/toastr.min.js') }}"></script>
    <!-- Alert -->
    @include('layouts.backend.partials.flash')
</body>

</html>