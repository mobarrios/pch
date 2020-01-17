@extends('layouts.app')

    @section('content')
        <h2>Creacón de Modulo</h2>

            {!! Form::open(['route'=> 'setup.post']) !!}

        <div class="form-group">
            {!! Form::label('Nombre Modulo') !!}
            {!! Form::text('module',null,['class'=>'form-control']) !!}
            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-default">Crear</button>

        {!! Form::close() !!}
    @endsection