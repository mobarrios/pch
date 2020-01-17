<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Entities\UsuarioOperativo;
use App\Entities\Operativo;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'usuario')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'cid@desarrollosocial.gob.ar';
        $user->username =  'cid';
        $user->fullname =  'cid';
        $user->is_active = 1;
        $user->email = 'cid@desarrollosocial.gob.ar';
        $user->password = 'Cid2020**';
        $user->sedes_id = 1;
        $user->save();
        $user->roles()->attach($role_admin);
        $operativos = Operativo::all();
        foreach ($operativos as $operativo)
        {
            $user_operativo = new UsuarioOperativo();
            $user_operativo->usuarios_id = $user->id;
            $user_operativo->operativos_id = $operativo->id;
            $user_operativo->save();
        }
        


        $user = new User();
        $user->name = 'concordia@pch.gob.ar';
        $user->username =  'concordia';
        $user->fullname =  'concordia';
        $user->is_active = 1;
        $user->email = 'concordia@pch.gob.ar';
        $user->password = 'Con327cordia';
        $user->sedes_id = 1;
        $user->save();
        $user->roles()->attach($role_user);
        $user_operativo = new UsuarioOperativo();
        $user_operativo->usuarios_id = $user->id;
        $user_operativo->operativos_id = 1;
        $user_operativo->save();

        $user = new User();
        $user->name = 'sanmartin@pch.gob.ar';
        $user->username =  'sanmartin';
        $user->fullname =  'sanmartin';
        $user->is_active = 1;
        $user->email = 'sanmartin@pch.gob.ar';
        $user->password = 'San2020martin';
        $user->sedes_id = 1;
        $user->save();
        $user->roles()->attach($role_user);
        $user_operativo = new UsuarioOperativo();
        $user_operativo->usuarios_id = $user->id;
        $user_operativo->operativos_id = 2;
        $user_operativo->save();

        $user = new User();
        $user->name = 'avellaneda@pch.gob.ar';
        $user->username =  'avellaneda';
        $user->fullname =  'avellaneda';
        $user->is_active = 1;
        $user->email = 'avellaneda@pch.gob.ar';
        $user->password = 'Ave0202llaneda';
        $user->sedes_id = 1;
        $user->save();
        $user->roles()->attach($role_user);
        $user_operativo = new UsuarioOperativo();
        $user_operativo->usuarios_id = $user->id;
        $user_operativo->operativos_id = 3;
        $user_operativo->save();

        $user = new User();
        $user->name = 'almirantebrown@pch.gob.ar';
        $user->username =  'almirantebrown';
        $user->fullname =  'almirantebrown';
        $user->is_active = 1;
        $user->email = 'almirantebrown@pch.gob.ar';
        $user->password = 'Al2020brown';
        $user->sedes_id = 1;
        $user->save();
        $user->roles()->attach($role_user);
        $user_operativo = new UsuarioOperativo();
        $user_operativo->usuarios_id = $user->id;
        $user_operativo->operativos_id = 4;
        $user_operativo->save();

        $user = new User();
        $user->name = 'matanza@pch.gob.ar';
        $user->username =  'matanza';
        $user->fullname =  'matanza';
        $user->is_active = 1;
        $user->email = 'matanza@pch.gob.ar';
        $user->password = 'Matan0201za';
        $user->sedes_id = 1;
        $user->save();
        $user->roles()->attach($role_user);
        $user_operativo = new UsuarioOperativo();
        $user_operativo->usuarios_id = $user->id;
        $user_operativo->operativos_id = 5;
        $user_operativo->save();



    }
}