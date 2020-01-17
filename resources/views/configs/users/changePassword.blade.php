@extends('layouts.app')

    @section('content')
        <div class="card-header">
                <h3 class="card-title">Cambiar contraseña</h3>
        </div>
        {!! Form::open(['route'=>'updatePassword']) !!}
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        {!! Form::label('Contraseña actual') !!}
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {!! Form::label('Nueva contraseña') !!}
                        <input type="password" name="newpassword" class="form-control">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {!! Form::label('Repita la nueva contraseña') !!}
                        <input type="password"  name="renewpassword" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white">
                <button type="submit" class="btn btn-primary">Guardar</button>          
            {!! Form::close() !!}
        </div>


    @endsection