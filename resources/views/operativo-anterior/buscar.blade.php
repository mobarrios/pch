@extends('layouts.app')

@section('content')
    <!-- <div class="card-header">
        <h3 class="card-title">Buscar</h3>
    </div> -->
    <div class="card-body">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-7">            
            {!! Form::open(['route'=> config($confFile.'.routeBuscar')]) !!}
            <div class="form-group">
               
                {!! Form::text('buscar',null,['class'=>'form-control', 'minlength'=>'5']) !!}
            </div>
        </div>
        <div class="col-1">
            <button type="submit" class="btn btn-success">Buscar</button>
            {!! Form::close() !!}
        </div>
        <div class="col-2"></div>
    </div>
  
            


       @if (isset($datas))
        <table id="" class="table table-hover">
            <thead>
            <tr>
                <!-- <th>Código</th> -->
                <th>APELLIDO Y NOMBRE</th>
                <th>DNI</th>
                <th>DÍA</th>
                <th>HORARIO</th>
                <th>RETIRÓ</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $operativo)
                <tr>
                    <!-- <td><a href="{{route(config($confFile.'.routeShow'),$operativo->id)}}" >{{$operativo->id}}</a></td> -->
                    <td>{{$operativo->apellido_nombre}}</td>
                    <td>{{$operativo->n_doc}}</td>
                    <td>{{$operativo->operativo_dia}}</td>
                    <td>{{$operativo->operativo_horario}}</td>
                    <td>
                        @if ($operativo->retiro == 1)
                            <a class="btn btn-success btn-sm" id="retiro2" data-url="{{route(config($confFile.'.routeUpdate'), $operativo->id )}}"  >Sí</a> 
                        @else
                            <a class="btn  btn-sm  btn-danger" id="retiro" data-url="{{route(config($confFile.'.routeUpdate'), $operativo->id )}}">No</a> 
                        @endif                       
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
  </div>



@endsection