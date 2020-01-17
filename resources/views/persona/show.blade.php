@extends('layouts.app')

@section('content')

<div class="row grid-margin">
    <div class="col-12">
        <div class="card card-revenue-table">
            <div class="card-header bg-white">
                 <h3 class="card-title">PERSONA</h3>
            </div>
             <div class="card-body">
                
                <div class="row">
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>NOMBRES</h6>
                            <p class="font-weight-light"> {{ $model->nombre }} </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>APELLIDOS</h6>
                            <p class="font-weight-light"> {{ $model->apellido }} </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>GENERO</h6>
                            <p class="font-weight-light"> {{ $model->genero }} </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>DOCUMENTO</h6>
                            <p class="font-weight-light"> {{ $model->tipo_doc }} -  {{ $model->nro_documento }} </p>
                          </div>
                        </div>
                    </div>
                </div><br><br>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>CUIL</h6>
                            <p class="font-weight-light"> {{ $model->cuil }} </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>ESTADO CIVIL</h6>
                            <p class="font-weight-light"> {{ $model->estado_civil }} </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>FECHA DE NACIMIENTO</h6>
                            <p class="font-weight-light"> {{ $model->fecha_nacimiento }} </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>EMAIL</h6>
                            <p class="font-weight-light"> {{ $model->email }}  </p>
                          </div>
                        </div>
                    </div>
                </div><br><br>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>TELEFONO</h6>
                            <p class="font-weight-light"> {{ $model->telefono }} </p>
                          </div>
                        </div>
                    </div>
                   
                </div><br> <hr>

                 <div class="row">
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>PROVINCIA</h6>
                            <p class="font-weight-light"> {{ isset($model->geos->provincia) ? $model->geos->provincia : '' }} </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>LOCALIDAD </h6>
                            <p class="font-weight-light"> {{ isset($model->geos->localidad) ? $model->geos->localidad : '' }} </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="revenue-item d-flex">
                          <div class="revenue-desc">
                            <h6>MUNICIPIO</h6>
                            <p class="font-weight-light"> {{ isset($model->geos->municipio) ? $model->geos->municipio : '' }} </p>
                          </div>
                        </div>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</div>

@endsection