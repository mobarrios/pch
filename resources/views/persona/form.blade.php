@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">PERSONAS</h3>
    </div>
    <div class="card-body">
        @if(isset($model))
            {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$model->id]]) !!}
        @else
            {!! Form::open(['route'=> config($confFile.'.routeStore')]) !!}
        @endif

            <div class="form-group">
                {!! Form::label('NOMBRES') !!}
                {!! Form::text('nombre',null,['class'=>'form-control']) !!}
            </div>   
            <div class="form-group">
                {!! Form::label('APELLIDOS') !!}
                {!! Form::text('apellido',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('GENERO') !!}
                {!! Form::text('genero',null, ['class'=>'form-control']) !!}
            </div>               
            <div class="form-group">
                {!! Form::label('TIPO DE DOCUMENTO') !!}
                {!! Form::text('tipo_doc', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('NUMERO DE DOCUMENTO') !!}
                {!! Form::text('nro_documento',null,['class'=>'form-control', 'max'=>'8']) !!}
            </div>  
            <div class="form-group">
                {!! Form::label('CUIT') !!}
                {!! Form::text('cuit',null,['class'=>'form-control', 'max'=>'8']) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('ESTADO CIVIL') !!}
                {!! Form::text('estado_civil',null, ['class'=>'form-control']) !!}
            </div>   
            <div class="form-group">
                {!! Form::label('FECHA NACIMIENTO') !!}
                {!! Form::date('fecha_nacimiento',null,['class'=>'form-control']) !!}
            </div>  
            <div class="form-group">
                {!! Form::label('EMAIL') !!}
                {!! Form::text('mail',null,['class'=>'form-control']) !!}
            </div>   
            <div class="form-group">
                {!! Form::label('TELEFONO') !!}
                {!! Form::text('telefono',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('CALLE') !!}
                {!! Form::text('calle',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('NRO') !!}
                {!! Form::text('numero',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('LATITUD') !!}
                {!! Form::text('latitud',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('LONGITUD') !!}
                {!! Form::text('longitud',null,['class'=>'form-control']) !!}
            </div>                
         
    </div>
    <div class="card-footer bg-white">
        <button type="submit" class="btn btn-success">Guardar</button>
        {!! Form::close() !!}
     </div>

@endsection