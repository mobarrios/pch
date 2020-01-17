<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->guard_name = 'web';
        $role->save();

        $role = new Role();
        $role->name = 'usuario';
        $role->guard_name = 'web';
        $role->save();
    }
}