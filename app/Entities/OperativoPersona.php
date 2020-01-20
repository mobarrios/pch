<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class OperativoPersona extends Entities
{
  use SoftDeletes;

    protected $table = 'operativos_personas';
    protected $fillable = [
      'operativos_id',
      'personas_id' 
    ];
 

}




