<?php

namespace App\Http\Repositories;

use App\Entities\Persona;
use App\Http\Repositories\BaseRepo;

class PersonaRepo extends BaseRepo
{
    public function getModel()
    {
        return new Persona();
    }

    public function create(Array $datos)
    {
        $model = $this->model->create($datos);
        $model->geos()->create($datos);
    }

    public function find($id)
    {
        $model = $this->model->find($id);
        $model->calle = $model->geos()->first()->calle;
        $model->numero = $model->geos()->first()->numero;
        $model->latitud = $model->geos()->first()->latitud;
        $model->longitud = $model->geos()->first()->longitud;
        return $model;
    }

}