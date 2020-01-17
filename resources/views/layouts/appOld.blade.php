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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Font Awesome Icons -->
    {{--    <link rel="stylesheet" href="{{ asset('js/plugins/font-awesome/css/font-awesome.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom justify-content-between">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>

        </ul>


        <!-- Right navbar links -->
        <ul class="navbar-nav">

            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarconfig" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        @if(Auth::user()->imagen_thumb)
                            <img src="{{ Auth::user()->imagen_thumb }}" class="img-user img-responsive rounded-circle" alt=""  >
                        @else
                            <img src="img/perfil-azul.png" class="img-user img-responsive rounded-circle" alt="" >
                            {{--<i class="icon-user fa fa-user rounded-circle"></i>--}}
                        @endif

                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        @if(!env('SSO_AUTH'))
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a class="dropdown-item"
                               href="{{env('SSO_MDS_URL')}}/auth/logout?redirect={{route('home')}}">
                                <em class="icon-logout"></em>
                                <span>Cerrar sesión</span>
                            </a>
                        @endif

                    </div>
                </li>
                @endguest

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <!-- Brand Logo -->
    <aside class="main-sidebar sidebar-core-secondary elevation-1">

        <a href="#" class="brand-link">
            <img src="img/logocid.png" width="240px"  >
        </a>
        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link menu">
                            <i class="fa fa-home"></i>
                            <p>
                                <span>Home</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('core.index') }}" class="nav-link  menu">
                            <i class="fa fa-link"></i>
                            <p>
                                <span>Core</span>
                            </p>
                        </a>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-cogs"></i>
                            <p>
                                <span>Config</span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('configs.users.index')}}" class="nav-link menu">
                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                    <p>Users</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('configs.roles.index')}}" class="nav-link menu">
                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                    <p>Roles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('configs.permissions.index')}}" class="nav-link menu">
                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                    <p>Permissions</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('titulo')</h1>
                    </div><!-- /.col -->

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v3</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->


                @if (count($errors) > 0)
                    <div class="row">
                        <div class="col-12">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>{{$error}}</strong>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">

                <div class="card">
                    @yield('content')
                </div>

            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->

    <footer class="main-footer ">
        <div class="row ">
            <div class="col-6 ">
                <img src="{{asset('img/logocid.png')}}" class="img" style="width: 200px" >
            </div>
            <div class="col-6">
                <img class="mx-auto" src="{{asset('img/logo-mds.png')}}" >
            </div>
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.js')


@include('core.js')

@yield('js')


</body>
</html>
