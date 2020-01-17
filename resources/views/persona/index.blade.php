@extends('layouts.app')

@section('content')
    <div class="card-header bg-white">
        <h3 class="card-title">PERSONAS</h3>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Código</th>
                <th>Apellido y nombres</th>
                <th>Número de documento</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)

                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->apellido}} {{$data->nombre}}</td>
                    <td>{{$data->nro_documento}}</td>
                    <td>
                        <a href="{{route(config($confFile.'.routeShow'),$data->id)}}" class="btn   btn-secondary">Ver</a>
                        <a href="{{route(config($confFile.'.routeEdit'),$data->id)}}" class="btn   btn-secondary">Editar</a>
                        <a href="{{route(config($confFile.'.routeDestroy'),$data->id)}}" class="btn  btn-secondary">Borrar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

          {{ $datas->links( "pagination::bootstrap-4") }}
    </div>
    <div class="card-footer bg-white">
            <a href="{{ route(config($confFile.'.routeCreate')) }}" class="btn btn-success ">Crear Persona</a>
    </div>
@endsection