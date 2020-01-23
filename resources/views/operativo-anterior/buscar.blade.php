
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Begin Inspectlet Embed Code (ESTO ES TEMPORAL) -->
    <!-- End Inspectlet Embed Code -->

    <meta charset="utf8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Ministerio de Desarrollo Social - Padrón</title>


    <link rel="shortcut icon" href="../favicon.ico"/>

    <link href="http://argob.github.io/poncho/node_modules/argob-poncho/dist/css/roboto-fontface.css" rel="stylesheet">

    <link href="http://argob.github.io/poncho/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="http://argob.github.io/poncho/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://argob.github.io/poncho/node_modules/argob-poncho/dist/css/poncho.css" rel="stylesheet">

{{--     <link href="../css/poncho.css" rel="stylesheet">
 --}}
    <style>
        .navbar-brand img {
            height: 50px !important;
        }

        body {
            font-family: "Roboto", "Helvetica Neue", "Helvetica", "Arial", sans-serif !important;
            font-size: 16px !important;
            height: 100% !important;
            max-width: 100% !important;
        }

    </style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116404797-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116404797-8');
</script>

    {{--
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : {{ env('GOOGLE_RECAPTCHA_KEY') }}
        });
      };
    </script>
        --}}

     
    <script src='https://www.google.com/recaptcha/api.js?render=6LdXC9EUAAAAABm_ftXh4M0_JSRsv2QdDNTEar_g'> 
    </script>
    <script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6LdXC9EUAAAAABm_ftXh4M0_JSRsv2QdDNTEar_g', {action: "buscar" })
    .then(function(token) {
    var recaptchaResponse = document.getElementById('recaptchaResponse');
    recaptchaResponse.value = token;
    });});
    </script>
    
    
</head>
<body>


<header>
    <nav class="navbar navbar-top navbar-default" role="navigation">
        <div class="container">
            <div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#main-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{-- <a class="navbar-brand" href="http://www.argentina.gob.ar">
                        <img alt="Brand"
                             src="https://www.argentina.gob.ar/profiles/argentinagobar/themes/argentinagobar/argentinagobar_theme/logo.svg"
                             height="50">
                        <h1 class="sr-only">Argentina.gob.ar <small>Presidencia de la Nación</small>
                        </h1>
                    </a> --}}
                </div>

                <!-- SEARCH FORM -->

            </div>
        </div>
    </nav>
</header>
<!-- end of #header -->

<div id="main" class="clearfix">


    <section class="jumbotron">
        <div class="jumbotron_bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb pull-left">
{{--                             <li><a href="http://argentina.gob.ar">Inicio</a></li>
 --}}                            <li><a href="http://argentina.gob.ar/desarrollosocial">Ministerio de Desarrollo Social</a>
                            </li>
                            <li class="active"><span>Padrón</span></li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>
    </section>

    <div class="page-contacto">

        <div id="content" class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row" style="margin-bottom:2em;margin-top:2em;">
                        <div class="col-12">
                            <h2 style="padding-left: 20px;">Plan Nacional Contra el Hambre</h2>
                        </div>
                    </div>

                    <div class="panel panel-default">
                          
                        <div class="panel-body">
                                <h3><small>¿Dónde retiro la tarjeta?</small></h3>
                              
{{-- 
            {!! Form::open(['route'=> 'personas.postFormulario', 'method' => 'post' ]) !!}
                <div class="form-group">
                {!! Form::text('buscar',null,['class'=>'form-control', 'minlength'=>'5']) !!}
                </div>
        </div>
        <div class="col-1">
            <button type="submit" class="btn btn-success">Buscar</button>
            {!! Form::close() !!} --}}

                              
            {!! Form::open(['route'=> 'personas.postFormulario', 'method' => 'post' ]) !!}
                                <div class="row">
                                    <div class="col-md-8">
                                       {{--  <input v-model="datos" placeholder="Ingrese su DNI" type="number"
                                               class="form-control" id="buscar"
                                               aria-required="true"> --}}

                                    {!! Form::text('buscar',null,['class'=>'form-control', 'minlength'=>'5','placeholder'=>'Ingrese su DNI' ,'id'=>'buscar']) !!}
                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

                                    </div>

                                    <div class="col-md-4">
                                        <button type="submit" disabled id="buscador" class="btn btn-primary btn-block">Buscar</button>
                                        
                                        {{--
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                            --}}  
                                    
                                    </div>

                                    
                                </div>
            {!! Form::close() !!}

                    @if(isset($datas))

                        @if($datas == 'sin data')
                            <div class="col-xs-12">
                                <p class="help-block error text-danger" >Usted no se encuentra asignado a ningún operativo activo.</p>
                            </div> 

                        @else
                              <table class="table table-responsive-poncho" v-if="resultado">
                                      
                                    <thead>
                                    <th>Nombre</th>
                                     
                                    <th>DNI</th>
                                        
                                    <th>Operativo</th>
                                        
                                    <th>Dirección</th>
                                        
                                    <th>Provincia</th>
                                    <th>Municipio</th>
                                    <th>Localidad</th>
                                        
                                    <th>Retiro</th>
                                        
                                    </thead>
                                      
                                    <tbody>
                                        
                                    <tr v-if="datosPersona != null">      
                                        <td data-label="Nombre">{{$datas->apellido}} {{$datas->nombre}}</td>
                                              
                                        <td data-label="DNI">{{$datas->nro_documento}}</td>
                                              
                                        <td data-label="Operativo">{{$datas->Operativo->first()->nombre}}</td>
                                              
                                        <td data-label="Dirección">{{$datas->Operativo->first()->Geos->first()->calle }} {{$datas->Operativo->first()->Geos->first()->numero }}</td>
                                              
                                        <td data-label="Provincia">{{$datas->Operativo->first()->Geos->first()->provincia }}</td>
                                              
                                        <td data-label="Municipio">{{$datas->Operativo->first()->Geos->first()->municipio }}</td>
                                              
                                        <td data-label="Localidad">{{$datas->Operativo->first()->Geos->first()->localidad }}</td>
                                        
                                              
                                        @if($datas->Tarjeta->first()->retiro_fecha == "" || $datas->Tarjeta->first()->retiro_hora == "")
                                                <td data-label="Retiro">Día y horario a definir</td>
                                        @else
                                            <td data-label="Retiro">{{$datas->Tarjeta->first()->retiro_fecha }} {{$datas->Tarjeta->first()->retiro_hora }}</td>
                                        @endif
                                              
                                    </tr>
                                     
                                    </tbody>
                                </table>
                            
                         @endif


                        @endif

                        @if(isset($captcha_error))
                            <div class="col-xs-12">
                                <p class="help-block error text-danger" > {{$captcha_error}} </p>
                            </div> 

                        @endif

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of #content -->


        <script src="../js/jquery-3.4.1.min.js"></script>
        {{-- <script src="https://www.google.com/recaptcha/api.js?render=6Ld0idAUAAAAAFjqrXLvjzfgu2PV9tjUstBopjwS"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="../js/consulta-padron.js"></script> --}}


    </div><!-- end of #wrapper -->


</div><!-- end of #main -->

{{-- <footer class="main-footer sticky-footer" id="footer-bottom" style="margin-top:2em;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="image-responsive" alt="Argentina.gob.ar - Presidencia de la Nación"
                     src="https://www.argentina.gob.ar/profiles/argentinagobar/themes/argentinagobar/argentinagobar_theme/logo_argentina_unida.svg">
                <br>
                <p class="text-muted small">Los contenidos de Argentina.gob.ar están licenciados bajo <a
                        href="https://creativecommons.org/licenses/by/2.5/ar/">Creative Commons Reconocimiento 2.5
                    Argentina License</a></p>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="region region-footer2">
                    <section id="block-menu-menu-footer-2" class="block block-menu clearfix">
                        <ul class="menu nav">
                            <li class="first leaf"><a href="https://www.argentina.gob.ar/turnos">Turnos</a></li>
                            <li class="leaf"><a href="https://www.argentina.gob.ar/organismos">Organismos del Estado</a>
                            </li>
                            <li class="last leaf"><a href="http://mapadelestado.jefatura.gob.ar/">Mapa del Estado</a>
                            </li>
                        </ul>
                    </section>
                </div>

            </div>
            <div class="col-md-3 col-sm-6">
                <div class="region region-footer3">
                    <section id="block-menu-menu-footer-3" class="block block-menu clearfix">
                        <ul class="menu nav">
                            <li class="first leaf"><a href="https://www.argentina.gob.ar/normativa">Leyes argentinas</a></li>
                            <li class="leaf"><a href="https://www.argentina.gob.ar/acerca">Acerca de este sitio</a></li>
                            <li class="last leaf"><a href="https://www.argentina.gob.ar/terminos-y-condiciones">Términos y condiciones</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</footer>
 --}}
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<script>
$(document).ready(function () {
        $('#buscador').removeAttr('disabled');
});
</script>

</body>
</html>

