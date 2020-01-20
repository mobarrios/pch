<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonaTarjetas extends Entities
{

  use SoftDeletes;
  
    protected $table = 'personas_tarjetas';
    protected $fillable = [
      'numero',
      'tarjetas_id',
      'personas_id',
      'operativos_id'    
    ];
 

}




