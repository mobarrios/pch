@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">GENEROS</h3>
    </div>
    <div class="card-body">
        <table id="table" class="table table-hover">
            <thead>
            <tr>
                <th>Código</th>                
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $genero)
                <tr>
                    <td>{{$genero->id}}</td>
                    <td>{{$genero->nombre}}</td>                   
                    <td>
                        <a href="{{route(config($confFile.'.routeEdit'),$genero->id)}}" class="btn   btn-secondary">Editar</a>
                        <a href="{{route(config($confFile.'.routeDestroy'),$genero->id)}}" class="btn  btn-secondary">Borrar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer bg-white">
            <a href="{{ route(config($confFile.'.routeCreate')) }}" class="btn btn-success ">Crear genero</a>
    </div>
@endsection