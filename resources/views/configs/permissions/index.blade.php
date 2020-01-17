@extends('layouts.app')

    @section('content')
        <div class="card-header bg-white">
            <h3 class="card-title">Permisos</h3>
        </div>
        <div class="card-body">
        <table id="table" class="table">
            <thead>
                <th>#</th>
                <th>Permiso</th>
                <th></th>
            </thead>
            <tbody>
               @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>
                        <a href="{{route(config($confFile.('.routeEdit')),$data->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route(config($confFile.('.routeDestroy')),$data->id)}}" class="btn btn-secondary">Del</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>

        </div>
        <div class="card-footer bg-white">
            <a href="{{ route(config($confFile.'.routeCreate')) }}" class="btn btn-secondary">Crear</a>
        </div>

    @endsection