@extends('layouts.app')

    @section('content')
        <div class="card-header bg-white">
            <h3 class="card-title">From Usuarios</h3>
        </div>
        <div class="card-body">
        @if(isset($model))
            {!! Form::model($model,['route'=>['configs.users.update',$model->id]]) !!}
        @else
            {!! Form::open(['route'=>'configs.users.store']) !!}
        @endif

            <div class="form-group">
                {!! Form::label('Nombre') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>

            </div>
            <div class="form-group">
                {!! Form::label('FullName') !!}
                {!! Form::text('fullname',null,['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->has('fullname') ? $errors->first('fullname') : '' }}</span>

            </div>
        <div class="form-group">
            {!! Form::label('User Name') !!}
            {!! Form::text('username',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('username') ? $errors->first('username') : '' }}</span>

        </div>

        @if(!isset($model))
            <div class="form-group">
                {!! Form::label('Password') !!}
                {!! Form::text('password',null,['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
            </div>
        @endif

            <div class="form-group">
            {!! Form::label('Email') !!}
            {!! Form::text('email',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
        </div>

        <div class="form-group">
            {!! Form::label('Rol') !!}
            {!! Form::select('roles_id[]',$roles, null,['class'=>'select2 form-control','multiple'=>'multiple']) !!}
            <span class="text-danger">{{ $errors->has('roles_id') ? $errors->first('roles_id') : '' }}</span>
        </div>

            {!! Form::hidden('sedes_id',1) !!}
            {!! Form::hidden('is_active',0) !!}

        </div>
        <div class="card-footer bg-white">
            <button type="submit" class="btn btn-secondary">Agregar</button>
            {!! Form::close() !!}
        </div>
    @endsection