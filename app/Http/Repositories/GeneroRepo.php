<?php

namespace App\Http\Repositories;

use App\Entities\Genero;
use App\Http\Repositories\BaseRepo;

class GeneroRepo extends BaseRepo
{
    public function getModel()
    {
        return new Genero();
    }

}