<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Entities
{

    use SoftDeletes;
    
    protected $table = 'generos';
    protected $fillable = [
        'nombre'
    ];
 

}




