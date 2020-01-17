<?php

namespace App\Entities;

class UsuarioOperativo extends Entities
{

    protected $table = 'users_operativos';
    protected $fillable = [
      'operativos_id',
      'usuarios_id'
    ];
 


}




