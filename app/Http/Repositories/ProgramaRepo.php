<?php

namespace App\Http\Repositories;

use App\Entities\Programa;
use App\Http\Repositories\BaseRepo;

class ProgramaRepo extends BaseRepo
{
    public function getModel()
    {
        return new Programa();
    }

}