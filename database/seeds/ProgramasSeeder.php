<?php

use Illuminate\Database\Seeder;
use App\Entities\Programa;


class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nuevoPrograma = new Programa();
        $nuevoPrograma->id = 1;
        $nuevoPrograma->nombre = 'Plan Alimentario';
        $nuevoPrograma->save();
        
    }
}
