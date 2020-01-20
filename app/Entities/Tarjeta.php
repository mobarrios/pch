<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarjeta extends Entities
{

  use SoftDeletes;
  
    protected $table = 'tarjetas';
    protected $fillable = [
      'numero',
      'importe',
      'sucursales_id',
      'numero_cuenta',
      'retiro_operativo',
      'retiro_sucursal',
      'retiro_fecha',
      'retiro_hora'
    ];
 
 	
}




