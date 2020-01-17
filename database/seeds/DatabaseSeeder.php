<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // La creación de datos de roles debe ejecutarse primero
          $this->call(RoleSeeder::class);
          // Los usuarios necesitarán los roles previamente generados
          $this->call(ProgramasSeeder::class);
          $this->call(OperativosSeeder::class);
          $this->call(UserSeeder::class);

          $this->call(BancosSeeder::class);


    }
}
