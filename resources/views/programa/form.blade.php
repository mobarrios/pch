@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">PROGRAMA</h3>
    </div>
    <div class="card-body">
        @if(isset($model))
            {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$model->id]]) !!}
        @else
            {!! Form::open(['route'=> config($confFile.'.routeStore')]) !!}
        @endif

            <div class="form-group">
                {!! Form::label('NOMBRE') !!}
                {!! Form::text('nombre',null,['class'=>'form-control']) !!}
            </div>
        
    </div>
    <div class="card-footer bg-white">
        <button type="submit" class="btn btn-success">Guardar</button>
        {!! Form::close() !!}
     </div>

@endsection