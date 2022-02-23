<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--     Fonts and icons     -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('admin//css/nucleo-svg.css')}}" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{asset('admin/css/argon-dashboard.css')}}" rel="stylesheet">

</head>
<body>
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
        @include('layouts.inc.sidebar')
        <main class="main-content position-relative border-radius-lg ">
            @include('layouts.inc.adminnav')
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    </div>
                    <div class="col-xl-3 col-sm-6">
                    </div>
                    <div class="row mt-4">
                        <div class="content">
                            @yield('content')
                        </div>
                    </div>

            </div>
            @include('layouts.inc.adminfooter')
        </main> 
    </div>
    <!-- Scripts -->
    <script src="{{asset('admin/js/core/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/chartjs.min.js')}}"></script>

    @yield('scripts')
</body>
</html>
