<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Geos extends Entities
{

    use SoftDeletes;
    
    protected $table = 'geos';
    protected $fillable = [
        'latitud',
        'longitud',
        'piso',
        'pais',
        'provincia',
        'localidad',
        'municipio',
        'depto',
        'cod_post',
        'calle',
        'numero',
        'entities_id',
        'entities_type'
    ];
    

	public function entities()
	{
	 return $this->morphTo();
	}

	public function Branches()
	{
	 return $this->belongsTo(Branches::class);
	}

	public function Items()
	{
	 return $this->belongsTo(Items::class, 'entities_id');
	}
}




