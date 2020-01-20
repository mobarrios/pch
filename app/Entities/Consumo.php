<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consumo extends Entities
{

    use SoftDeletes;

    protected $table = 'consumos';
    protected $fillable = [
        'nombre'
    ];
 

}




