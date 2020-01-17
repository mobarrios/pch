<!DOCTYPE html>
<html lang="es">
<base href="{{asset('/')}}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME', 'MDS') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="theme_2/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="theme_2/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="theme_2/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="theme_2/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="theme_2/css/style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    </style>

</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="col-12 text-center">
                        <h2 style=" font-family: 'Open Sans'">Sistema {{ env('APP_NAME', 'MDS') }}</h2>
                        <hr>
                        <img src="img/logo-mds.png">
                    </div>
                    <div class="auto-form-wrapper mt-5">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            @if (count($errors) > 0)
                                <div class="row">
                                    <div class="col-12">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <p class="small">{{$error}}</p>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <label class="label">Usuario</label>
                                <div class="input-group">

                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}"
                                           required autofocus>

                                    <div class="input-group-append">
                                          <span class="input-group-text">
                                            <i class="mdi mdi-account-circle "></i>
                                          </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="*********">
                                    <div class="input-group-append">
                                      <span class="input-group-text">
                                        <i class="mdi mdi-key-variant"></i>
                                      </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Ingresar</button>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                        <input type="checkbox"
                                               name="remember" {{ old('remember') ? 'checked' : '' }}>
                                       Mantener Sesión.
                                    </label>
                                </div>
                                <a href="#" class="text-small forgot-password text-black">Olvidaste tu contraseña ?</a>
                            </div>
                        </form>
                    </div>
                    <p class="footer-text text-center">copyright © 2018 . Ministerio de Desarollo Social.</p>
                    <hr>
                    <div class="col-12 text-center">
                     <img width="250px" src="img/logocid.png">
                    </div>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="theme_2/vendors/js/vendor.bundle.base.js"></script>
<script src="theme_2/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="theme_2/js/off-canvas.js"></script>
<script src="theme_2/js/hoverable-collapse.js"></script>
<script src="theme_2/js/misc.js"></script>
<script src="theme_2/js/settings.js"></script>
<script src="theme_2/js/todolist.js"></script>
<!-- endinject -->
</body>

</html>