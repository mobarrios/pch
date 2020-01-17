@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">SUCURSAL</h3>
    </div>
    <div class="card-body">
        @if(isset($model))
            {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$banco_id, $model->id]]) !!}
        @else
            {!! Form::open(['route'=> [config($confFile.'.routeStore'),$banco_id]]) !!}
        @endif
            <input type="hidden" value="{{$banco_id}}" name="bancos_id">
            <div class="form-group">
                {!! Form::label('NOMBRE') !!}
                {!! Form::text('nombre',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('CODIGO') !!}
                {!! Form::number('cod',null,['class'=>'form-control']) !!}
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