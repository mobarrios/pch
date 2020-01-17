<?php

namespace App\Http\Repositories\Configs;

use App\User;
use App\Http\Repositories\BaseRepo;

class UsersRepo extends BaseRepo
{
    public function getModel()
    {
        return new User();
    }

    public function searchByUsername($username)
    {
        return $this->model
            ->where('username', $username)
            ->first();
    }
}