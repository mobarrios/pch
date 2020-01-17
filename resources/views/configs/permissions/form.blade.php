@extends('layouts.app')

    @section('content')
        <div class="card-header bg-white">
            <h3 class="card-title">Form Permisos</h3>
        </div>
        <div class="card-body">        @if(isset($model))
            {!! Form::model($model,['route'=>[config($confFile.'.routeUpdate'),$model->id]]) !!}
        @else
            {!! Form::open(['route'=> config($confFile.'.routeStore') ]) !!}
        @endif

        <div class="form-group">
            {!! Form::label('Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>

        </div>
       {{-- <div class="form-group">
            {!! Form::label('Slug') !!}
            {!! Form::text('slug',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('slug') ? $errors->first('slug') : '' }}</span>

        </div>
        <div class="form-group">
            {!! Form::label('Description') !!}
            {!! Form::text('description',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>

        </div>
        <div class="form-group">
            {!! Form::label('Level') !!}
            {!! Form::text('level',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('level') ? $errors->first('level') : '' }}</span>

        </div>--}}

        </div>
        <div class="card-footer bg-white">
            <button type="submit" class="btn btn-secondary">Agregar</button>
            {!! Form::close() !!}
        </div>
    @endsection