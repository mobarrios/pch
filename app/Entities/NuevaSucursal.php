<?php

namespace App\Entities;

class NuevaSucursal extends Entities
{

    protected $table 	= 'nuevas_sucursales';
    protected $fillable = [
	'CODIGO',
	'SUCURSAL',
	'CODIGO_zonal',
	'ZONAL',
	'DEPENDE SUCURSAL',
	'PROVINCIA',
	'LOCALIDAD',
	'DOMICILIO',
	'CODG POSTAL',
    ];

  

}