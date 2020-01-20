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
 --}}              <p class="mb-0 text-right"> {!! $op->nombre !!} </p>      
                <div class="fluid-container">
                  <strong>Concurrencia</strong>
                  <h1 class="font-weight-medium text-right mb-0">{{$op->cantidad}} </h1>
                </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    @endforeach
</div>

@endsection