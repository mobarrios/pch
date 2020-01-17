<?php

use Illuminate\Database\Seeder;
use App\Entities\Banco;


class BancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $banco 			= new Banco();
        $banco->id 	   	= 1;
        $banco->nombre 	= 'Banco Nación';
        $banco->save();
        
    }
}
