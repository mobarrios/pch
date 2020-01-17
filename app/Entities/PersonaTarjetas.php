<?php

namespace App\Entities;

class PersonaTarjetas extends Entities
{

    protected $table = 'personas_tarjetas';
    protected $fillable = [
      'numero',
      'tarjetas_id',
      'personas_id',
      'operativos_id'    
    ];
 

}




