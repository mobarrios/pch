<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{asset('/')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME', 'MDS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    {{--    <link rel="stylesheet" href="{{ asset('js/plugins/font-awesome/css/font-awesome.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">

    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{--<script src="{{ asset('js/plugins/bootstrap/bootstrap.js') }}"></script>--}}
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom justify-content-between" style="margin-left: 0 !important;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <!-- Brand Logo -->
                <a href="/" class="brand-link">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>

                </a>

            </li>

        </ul>
    </nav>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"style="margin-left: 0 !important;">

        <!-- Main content -->
        <div class="content mt-5">
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <footer class="container-fluid mt-2 d-none d-md-block bg-dark">
        <div class="row d-flex pt-0 pr-md-4 pl-4 mb-0 py-2">
            <div class="col-xs-12 col-md-3">
                <img src="{{asset('img/logocid-blanco.png')}}" class="img" style="width: 90%;">
            </div>
            <div class="col-xs-12 col-md-3 pt-1 ml-md-auto">
                <img class="mx-auto" src="{{asset('img/logomin-bco.png')}}"style="width: 70%;">
            </div>
        </div>
    </footer>
    <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.js')


@include('core.js')

@yield('js')

<script>

</script>

</body>
</html>
