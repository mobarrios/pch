
    <div class="card-body">
    <div class="row">
        <h1>Programa Alimentario</h1>
        <div class="col-2"></div>
        <div class="col-7">            
            {!! Form::open(['route'=> 'personas.postFormulario', 'method' => 'post' ]) !!}
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
                <th>APELLIDO </th>
                <th>NOMBRE </th>

                <th>DNI</th>
                <th>DÍA</th>
                <th>HORARIO</th>
                <th>RETIRÓ</th>
            </tr>
            </thead>
            <tbody>
          
                <tr>
                    
                    <td>{{$datas->apellido}}</td>
                    <td>{{$datas->nombre}}</td>
                    <td>{{$datas->nro_documento}}</td>
                    
                </tr>
            </tbody>
        </table>
    @endif
  </div>


