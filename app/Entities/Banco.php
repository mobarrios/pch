<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banco extends Entities
{
    use SoftDeletes;
    
    protected $table = 'bancos';
    protected $fillable = [
        'nombre'
    ];
 

}




