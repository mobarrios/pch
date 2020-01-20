<!DOCTYPE html>
<html lang="es">

<base href="{{asset('/')}}">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME', 'MDS') }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    </style>

        @include('layouts.css')

    <!-- endinject -->
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116404797-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116404797-8');
</script>
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar   default-layout  p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background-color: #1d6abb" >
           {{-- <a class="navbar-brand brand-logo" href="index.html">
                <img src="img/logocid-blanco.png" alt="logo"/>
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="img/logocid.png" alt="logo" />
            </a>--}}

            <div class="brand-logo mt-2"  style="background-color: #1d6abb"  >
                <img width="200px" src="img/logocid-blanco.png" alt="logo" />
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Bienvenido : <strong>{{ Auth::user()->name }}</strong></span>
                        @if(Auth::user()->imagen_thumb)
                            <img class="img-xs rounded-circle" src="theme_2/images/faces/face1.jpg" alt="Profile image">
                        @else
                            {{--<img src="img/perfil-azul.png" class="img-user img-responsive rounded-circle" alt="" >--}}
                            <span class="mdi-18px mdi mdi-account-outline "></span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        @if(!env('SSO_AUTH'))

                            <a class="dropdown-item" href="{{ route('change_password') }}">
                                Cambiar contraseña
                            </a>

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
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu "></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">

            <ul class="nav">
                <li class="nav-item pl-5 mt-4" style="font-family: 'Open Sans' !important;"  ><h4 class="text-muted">SISTEMA {{ env('APP_NAME', 'MDS') }}</h4>
                </li>
                <li class="m-0">
                    <hr>
                </li>

                
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('home')}}">
                        <i class="menu-icon mdi mdi-home-outline "></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li> -->

        


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('operativo.buscar')}}">
                        <i class="menu-icon mdi mdi-magnify"></i>
                        <span class="menu-title">Buscar</span>
                    </a>
                </li>


@role('admin')

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tablasMaestras">
            <i class="menu-icon mdi mdi-table "></i>
            <span class="menu-title">Tablas</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tablasMaestras">
            <ul class="nav flex-column sub-menu">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('programa.index')}}">
                        <i class="menu-icon mdi mdi-application"></i>
                        <span class="menu-title">Programas</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tipo_documento.index')}}">
                        <i class="menu-icon mdi mdi-file-document-box "></i>
                        <span class="menu-title">Tipos de documentos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('genero.index')}}">
                        <i class="menu-icon mdi mdi-human-male-female"></i>
                        <span class="menu-title">Generos</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('estado_civil.index')}}">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Estados civiles</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('banco.index')}}">
                        <i class="menu-icon mdi mdi-bank"></i>
                        <span class="menu-title">Bancos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('consumo.index')}}">
                        <i class="menu-icon mdi mdi-cash-multiple"></i>
                        <span class="menu-title">Consumos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reportes.index')}}">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Reportes</span>
                    </a>
                </li>

            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth">
            <i class="menu-icon mdi mdi-settings "></i>
            <span class="menu-title">Configuración</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('configs.users.index')}}">
                        <span class="menu-title">Usuarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('configs.roles.index')}}">
                        <span class="menu-title">Roles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('configs.permissions.index')}}">
                        <span class="menu-title">Permisos</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

@endrole      

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif


                @if (count($errors) > 0)
                    <div class="row">
                        <div class="col-12">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{$error}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif


                @yield('secondContent')
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            @yield('content')
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018.  Ministerio de Desarrollo Social.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">core v.{{config('app.core')}}
                    </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


@include('layouts.js')
@yield('js')

</body>

</html>
