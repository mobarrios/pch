@extends('layouts.app')

@section('secondContent')
   <div class="row">
    @foreach($operativo as $op)

    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
       
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-account-check text-info icon-lg"></i>
            </div>
            <div class="float-right">
{{--               <p class="mb-0 text-right"> {!! date('d/m/Y',strtotime($op->dia) )  !!} </p>
 --}}                   
                <div class="fluid-container">
                  <strong>{!! $op->nombre !!}</strong>
                   <h3 class="font-weight-medium text-right mb-0 text-danger"> <small class="text-muted">Personas</small> {{$op->cantidad}}  </h3>
                  <h3 class="font-weight-medium text-right mb-0 text-success"><small class="text-muted">Concurridas</small> {{$op->con}}  </h3>

                </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    @endforeach
</div>

@endsection