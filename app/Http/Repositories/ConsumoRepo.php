<?php

namespace App\Http\Repositories;

use App\Entities\Consumo;
use App\Http\Repositories\BaseRepo;

class ConsumoRepo extends BaseRepo
{
    public function getModel()
    {
        return new Consumo();
    }

}