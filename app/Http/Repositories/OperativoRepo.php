<?php

namespace App\Http\Repositories;

use App\Entities\Operativo;
use App\Http\Repositories\BaseRepo;

class OperativoRepo extends BaseRepo
{
    public function getModel()
    {
        return new Operativo();
    }

    public function create(Array $datos)
    {
        $model = $this->model->create($datos);
        $model->geos()->create($datos);

        return $model;
    }

    public function find($id)
    {
        $model = $this->model->find($id);
        $model->provincia = $model->geos()->first()->provincia;
        $model->localidad = $model->geos()->first()->localidad;
        $model->municipio = $model->geos()->first()->municipio;
        $model->calle = $model->geos()->first()->calle;
        $model->numero = $model->geos()->first()->numero;
        $model->latitud = $model->geos()->first()->latitud;
        $model->longitud = $model->geos()->first()->longitud;

        return $model;
    }

}