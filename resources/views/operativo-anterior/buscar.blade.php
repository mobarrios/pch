
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

    <base href="{{asset('')}}">

    <link rel="shortcut icon" href="favicon.ico"/>

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

                              
            {!! Form::open(['route'=> 'personas.postFormulario', 'method' => 'post', 'id' => 'formulario' ]) !!}
                                <div class="row">
                                    <div class="col-md-8">
                                       {{--  <input v-model="datos" placeholder="Ingrese su DNI" type="number"
                                               class="form-control" id="buscar"
                                               aria-required="true"> --}}

                                                               {!! Form::text('buscar',null,['class'=>'form-control', 'minlength'=>'5','placeholder'=>'Ingrese su DNI' ,'id'=>'buscar']) !!}

                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" :disabled="enviado" class="btn btn-primary btn-block">Buscar</button>
                                    </div>

                                    
                                </div>
            {!! Form::close() !!}

                         @if(isset($datas))

                         @if($datas == 'sin data')
                                <div class="col-xs-12">
                                    <p class="help-block error text-danger" >Usted no se encuentra asignado a ningún operativo activo.</p>
                                </div> 

                         @elseif($datas == 'captcha')
                                <div class="col-xs-12">
                                    <p class="help-block error text-danger" >Hubo un error, vuelva a intentarlo nuevamente más tarde.</p>
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

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of #content -->



    </div><!-- end of #wrapper -->


</div><!-- end of #main -->


<script src="js/jquery.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld0idAUAAAAAFjqrXLvjzfgu2PV9tjUstBopjwS"></script>
<script src="js/consulta-padron.js"></script>

</body>
</html>



    
