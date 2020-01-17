<?php

namespace App\Entities;

class PersonaDiaHorario extends Entities
{

    protected $table 	= 'personas_dias_horarios';
    protected $fillable = [
	'NRO_DOC',
	'CUIL',
	'OPERATIVO_DIA',
	'OPERATIVO_HORARIO',
	
    ];

  

}