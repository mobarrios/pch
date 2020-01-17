<?php

namespace App\Entities;

class Sucursal extends Entities
{

    protected $table = 'sucursales';
    protected $fillable = [
        'nombre',
        'bancos_id',
        'cod'
    ];
 

}




