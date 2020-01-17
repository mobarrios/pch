@extends('layouts.app')

    @section('content')

        <div class="card-header bg-white">
            <h3 class="card-title">Permisos : {{$model->name}}s</h3>
        </div>

        <div class="card-body">
            {!! Form::model($model,['route'=>['configs.roles.permissions',$model->id]]) !!}
            {!! Form::hidden('role_id',$model->id) !!}
            <table id="table" class="table">
                <thead>
                    <th></th>
                    <th>Permisos</th>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>
                            @if($model->hasPermissionTo($permission->name))
                                <input name="permission[]"  value="{{$permission->id}}" type="checkbox" checked>
                            @else
                                <input name="permission[]"  value="{{$permission->id}}" type="checkbox">
                            @endif
                        </td>
                        <td>{{$permission->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer bg-white">
            <button type="submit" class="btn btn-secondary">Agregar</button>
            {!! Form::close() !!}
        </div>

    @endsection