<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('frontend_dashboard/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_dashboard/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{ asset('frontend_dashboard/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('frontend_dashboard/assets/images/logo/favicon.png')}}" type="image/png">
    
<link rel="stylesheet" href="{{ asset('frontend_dashboard/assets/css/shared/iconly.css')}}">

</head>
<body>
    <div id="app">

        {{-- Header --}}
        @include('frontend_2/layouts.sidebar')
        {{-- End Header --}}

        {{-- Main --}}
        @yield('content')
        {{-- End Header --}}

    </div>
    <script src="{{ asset('frontend_dashboard/assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('frontend_dashboard/assets/js/app.js')}}"></script>
    
<!-- Need: Apexcharts -->
<script src="{{ asset('frontend_dashboard/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{ asset('frontend_dashboard/assets/js/pages/dashboard.js')}}"></script>

</body>

</html>
