<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Spacely For Office Space for Rent">
    <title>Spacely - Design System for Office Space and Real Estate.</title>

    <!-- Styles -->
    <link href="{{ asset('assets/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="{{ asset('assets/fonts/fontawesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css"   href="{{ asset('assets/css/slick.css') }}" >
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/slick-theme.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/flag-icon/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/css/theme-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/select2/select2.min.css') }}">
</head>
<body>
    <div id="app">
        	@include('inc.navbar')
	
	
    {{-- @include('inc.messages') --}}
        @yield('content')
  

    <!-- Scripts -->
    
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/main-js.js') }}"></script>
    <script src="{{ asset('assets/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
</body>
</html>
