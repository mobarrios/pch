@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">OPERATIVO</h3>
    </div>
    <div class="card-body">
        @if(isset($model))
            {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$programa_id, $model->id]]) !!}
            <input type="hidden" value="{{$operativos_id}}" name="operativos_id">
        @else
            {!! Form::open(['route'=> [config($confFile.'.routeStore'),$programa_id]]) !!}
        @endif
            <input type="hidden" value="{{$programa_id}}" name="programas_id">
            
            <div class="form-group">
                {!! Form::label('NOMBRE') !!}
                {!! Form::text('nombre',null,['class'=>'form-control']) !!}
            </div>        
            <div class="form-group">
                {!! Form::label('DIA') !!}
                {!! Form::date('dia',null,['class'=>'form-control']) !!}
            </div>    
            <div class="form-group">
                {!! Form::label('horario') !!}
                {!! Form::time('horario',null,['class'=>'form-control']) !!}
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
            
            <div class="form-group">
                {!! Form::label('USUARIOS AUTORIZADOS') !!} 
                    {!! Form::select('usuarios_id[]',$usuarios, $usuarios_autorizados, ['class'=>'select2 form-control', 'multiple' => 'multiple']) !!}
            </div>            
    </div>
    <div class="card-footer bg-white">
        <button type="submit" class="btn btn-success">Guardar</button>
        {!! Form::close() !!}
     </div>

@endsection