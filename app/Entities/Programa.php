<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programa extends Entities
{
    use SoftDeletes;

    protected $table = 'programas';
    protected $fillable = [
        'nombre'
    ];
 

}




