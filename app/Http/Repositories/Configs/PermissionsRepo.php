<?php

namespace App\Http\Repositories\Configs;

//use App\Entities\Configs\Permissions;
use App\Http\Repositories\BaseRepo;
use Spatie\Permission\Models\Permission;

class PermissionsRepo extends BaseRepo
{
    public function getModel()
    {
        return new Permission();
    }
}