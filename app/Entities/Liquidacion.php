<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Liquidacion extends Entities
{

    use SoftDeletes;
    
    protected $table = 'liquidaciones';
    protected $fillable = [
        'tarjetas_id'
    ];
 

}




