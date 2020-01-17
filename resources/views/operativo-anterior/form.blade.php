@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">CORE</h3>
    </div>
    <div class="card-body">
        @if(isset($model))
            {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$model->id]]) !!}
        @else
            {!! Form::open(['route'=> config($confFile.'.routeStore')]) !!}
        @endif

            <div class="form-group">
                {!! Form::label('String') !!}
                {!! Form::text('string',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Tiny') !!}
                {!! Form::text('tiny',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Text') !!}
                {!! Form::text('text',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Date') !!}
                {!! Form::text('date',null,['class'=>'datepicker form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Double') !!}
                {!! Form::text('double',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Select') !!}
                {!! Form::select('double',[1,2,3,4,6],null, ['class'=>'form-control select2']) !!}
            </div>
    </div>
    <div class="card-footer bg-white">
        <button type="submit" class="btn btn-success">Guardar</button>
        {!! Form::close() !!}
     </div>

@endsection