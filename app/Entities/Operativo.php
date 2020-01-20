<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operativo extends Entities
{

    use SoftDeletes;
    
    protected $table = 'operativos';
    protected $fillable = [
       'nombre',
       'programas_id',
       'dia',
       'horario'
    ];

    public function setDateAttribute($val)
    {
        $this->attributes['date'] = date('Y-m-d',strtotime($val));
    }

    public function getEstadoAttribute()
    {
        return config('milo.helps.status.'.$this->attributes['status_id']);
    }

    public function scopeDni($query, $valor)
    {
        return $query->where('n_doc', 'like', '%'.$valor.'%');
    }

    public function scopeNombre($query, $valor)
    {
        return $query->where('apellido_nombre', 'like', '%'.$valor.'%');
    }

     public function Persona(){

        return $this->belongsToMany( Persona::class , 'operativos_personas',  'operativos_id','personas_id');

     }



 
}




