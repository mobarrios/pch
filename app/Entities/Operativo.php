<?php

namespace App\Entities;

class Operativo extends Entities
{

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



 
}




