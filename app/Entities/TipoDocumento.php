<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoDocumento extends Entities
{
    use SoftDeletes;

    protected $table = 'tipos_documentos';
    protected $fillable = [
        'nombre'
    ];
 

}




