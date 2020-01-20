<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sucursal extends Entities
{
    use SoftDeletes;
    

    protected $table = 'sucursales';
    protected $fillable = [
        'nombre',
        'bancos_id',
        'cod'
    ];
 

}




