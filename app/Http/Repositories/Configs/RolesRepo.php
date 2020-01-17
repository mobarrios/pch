<?php

namespace App\Http\Repositories\Configs;

//use App\Entities\Configs\Roles;
use App\Http\Repositories\BaseRepo;
use Spatie\Permission\Models\Role;

class RolesRepo extends BaseRepo
{
    public function getModel()
    {
        return new Role();
    }
}