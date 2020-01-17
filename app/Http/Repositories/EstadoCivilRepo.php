<?php

namespace App\Http\Repositories;

use App\Entities\EstadoCivil;
use App\Http\Repositories\BaseRepo;

class EstadoCivilRepo extends BaseRepo
{
    public function getModel()
    {
        return new EstadoCivil();
    }

}