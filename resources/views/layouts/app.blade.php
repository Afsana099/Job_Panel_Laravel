<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Job Panel</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,500,700,800,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/all.min.css') }}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/owl.carousel.min.css') }}" />
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/style.css') }}" />

</head>
<body id="page-top">

    @include('partials.header')
    @yield('content')
    @include('partials.footer')
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('public/admin/assets/js/jquery-1.12.4.min.js') }}" />
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{ asset('public/admin/assets/js/bootstrap.min.js') }}" />
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('public/admin/assets/js/owl.carousel.min.js') }}" />
        <link rel="stylesheet" href="{{ asset('public/admin/assets/js/popper.min.js') }}" />
        
    
    @yield('scripts')
    @include('partials.toastr')
</body>
</html>
