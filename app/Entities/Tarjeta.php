<?php

namespace App\Entities;

class Tarjeta extends Entities
{

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




