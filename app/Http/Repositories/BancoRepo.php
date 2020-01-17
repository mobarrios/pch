<?php

namespace App\Http\Repositories;

use App\Entities\Banco;
use App\Http\Repositories\BaseRepo;

class BancoRepo extends BaseRepo
{
    public function getModel()
    {
        return new Banco();
    }

}