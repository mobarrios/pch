<?php

namespace App\Entities;

class OperativoPersona extends Entities
{

    protected $table = 'operativos_personas';
    protected $fillable = [
      'operativos_id',
      'personas_id' 
    ];
 

}




