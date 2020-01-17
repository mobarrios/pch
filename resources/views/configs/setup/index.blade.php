@extends('layouts.app')

    @section('content')
        <h2>Roles</h2>
        <table class="table">
            <thead>
                <th>#</th>
                <th>UserName</th>
                <th>Email</th>
                <th></th>
            </thead>
            <tbody>
               @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>

                    <td>
                        <a href="{{route(config($confFile.('.routeEdit')),$data->id)}}" class="btn btn-default">Edit</a>
                        <a href="{{route(config($confFile.('.routeDestroy')),$data->id)}}" class="btn btn-default">Del</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>

        <a href="{{route(config($confFile.'.routeCreate'))}}" class="btn btn-default">Agregar</a>
    @endsection