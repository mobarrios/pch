<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioOperativo extends Entities
{
  use SoftDeletes;

    protected $table = 'users_operativos';
    protected $fillable = [
      'operativos_id',
      'usuarios_id'
    ];
 


}




