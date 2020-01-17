@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">Operativo</h3>
    </div>

    <div class="card">
        <input type="text" name="buscar_nombre">
        <input type="text" name="buscar_dni">
    </div>
    
    <div class="card-body">
        @if (isset($datas))
            <table id="" class="table table-hover">
                <thead>
                <tr>
                    <th>Código</th>
                    <th>Apellido y Nombre</th>
                    <th>DNI</th>
                    <th>DÍA</th>
                    <th>HORARIO</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
            
                    @foreach($datas as $operativo)
                        <tr>
                            <td><a href="{{route(config($confFile.'.routeShow'),$operativo->id)}}" >{{$operativo->id}}</a></td>
                            <td>{{$operativo->apellido_nombre}}</td>
                            <td>{{$operativo->n_doc}}</td>
                            <td>{{$operativo->operativo_dia}}</td>
                            <td>{{$operativo->operativo_horario}}</td>
                            <td>
                                <a href="{{route(config($confFile.'.routeEdit'),$operativo->id)}}" class="btn   btn-secondary">Editar</a>
                                <a href="{{route(config($confFile.'.routeDestroy'),$operativo->id)}}" class="btn  btn-secondary">Borrar</a>
                            </td>
                        </tr>
                    @endforeach
            
                </tbody>
            </table>
    @endif
    </div>
    <div class="card-footer bg-white">
            <a href="{{ route(config($confFile.'.routeCreate')) }}" class="btn btn-success ">Crear Core</a>
    </div>
@endsection