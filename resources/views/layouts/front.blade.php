<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--     Fonts and icons     -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('frontend/css/nucleo-svg.css')}}" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{asset('frontend/css/argon-dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
    {{-- Carousel --}}
    <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet">

</head>
<body>
    @include('layouts.inc.frontnavbar')
    <div class="min-height-300 bg-primary position-absolute w-100">
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{asset('frontend/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
    @if(session('status'))
        <script>
            swal('{{session('status')}}')
        </script>
    @endif
    @yield('scripts')
</body>
</html>