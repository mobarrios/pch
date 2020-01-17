@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">PROGRAMAS</h3>
    </div>
    <div class="card-body">
        <table id="table" class="table table-hover">
            <thead>
            <tr>
                <th>Código</th>                
                <th>Nombre</th>
                <th>Operativos</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->nombre}}</td> 
                    <td><a href="{{route('programa.operativo.index',$data->id)}}" class="btn   btn-secondary">Operativos</td>                     
                    <td>
                        <a href="{{route(config($confFile.'.routeEdit'),$data->id)}}" class="btn   btn-secondary">Editar</a>
                        <a href="{{route(config($confFile.'.routeDestroy'),$data->id)}}" class="btn  btn-secondary">Borrar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer bg-white">
            <a href="{{ route(config($confFile.'.routeCreate')) }}" class="btn btn-success ">Crear programa</a>
    </div>
@endsection