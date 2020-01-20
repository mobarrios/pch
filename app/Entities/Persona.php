<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Entities
{
    use SoftDeletes;

    protected $table = 'personas';
    protected $fillable = [
        'nombre',
        'apellido',
        'generos_id',
        'tipo_documento_id',
        'nro_documento',
        'cuit',
        'estado_civil_id',
        'fecha_nacimiento',
        'mail',
        'operativos_id',
        'telefono',
        'tipo_doc',
        'genero',
        'estado_civil'


    ];
 

     public function Operativo(){

        return $this->belongsToMany( Operativo::class , 'operativos_personas', 'personas_id', 'operativos_id')->withPivot('concurrio');

     }

     public function Tarjeta(){

        return $this->belongsToMany( Tarjeta::class ,'personas_tarjetas','tarjetas_id','personas_id');
     }
}