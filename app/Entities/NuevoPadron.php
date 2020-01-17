<?php

namespace App\Entities;

class NuevoPadron extends Entities
{

    protected $table 	= 'nuevo_padron';
    protected $fillable = [
	'CUIT',
	'APELLIDO',
	'NOMBRE',
	'programas_id',
	'dia',
	'horario',
	'TIPO_DOC',
	'NRO_DOC',
	'FECHA_NACIMIENTO',
	'PAIS',
	'PROVINCIA',
	'LOCALIDAD',
	'CALLE',
	'NUMERO',
	'PISO',
	'DEPTO',
	'COD_POSTAL',
	'MAIL',
	'TELEFONO',
	'MONTO',
	'ESTADO',

    ];

  

}

