@extends('layouts.app')

@section('content')
    <!-- <div class="card-header">
        <h3 class="card-title">Buscar</h3>
    </div> -->
    <div class="card-body">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-7">            
            {!! Form::open(['route'=> 'operativo.buscarPost']) !!}
            <div class="form-group">
               
                {!! Form::text('buscar',null,['class'=>'form-control', 'minlength'=>'5', 'placeholder' => 'Buscar por APELLIDO NOMBRE o DOCUMENTO']) !!}
            
            </div>
            <div class="text-center" style="font-size: 12px; text-transform: uppercase;">Solo se mostrarán los primeros 50 resultados</div>
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
                <th>UBICACIÓN</th>
                <th>CONCURRIÓ</th>
            </tr>
            </thead>
            <tbody>
         
 
            <!-- foreach ($datas as $data) -->
       
                @foreach($datas as $persona)    
                    @if (!$persona->Operativo->isEmpty())                
                        <tr>
                            
                            <td>{{$persona->apellido}} {{$persona->nombre}}</td>
                            <td>{{$persona->nro_documento}}</td>
                            <td>{{$persona->Tarjeta->first()->retiro_fecha}}</td>
                            <td>{{$persona->Tarjeta->first()->retiro_hora}}</td>
                            <td>{{$persona->Operativo->first()->nombre}}</td>
                            <td>
                        
                                @if ($persona->Operativo->first()->pivot->concurrio == 1)
                                    <a class="btn btn-success btn-sm retiro2" data-url="{{route('operativo.update_concurrio', [$persona->id, $persona->Operativo->first()->id] )}}"  >Sí</a> 
                                @else
                                    <a class="btn  btn-sm  btn-danger retiro"  data-url="{{route('operativo.update_concurrio', [$persona->id, $persona->Operativo->first()->id] )}}">No</a> 
                                @endif                       
                            </td>
                        </tr>
                    @endif
                @endforeach                
            <!-- endforeach             -->
            </tbody>
        </table>       
        
    @endif
  </div>
 


@endsection