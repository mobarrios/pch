<?php

use Illuminate\Database\Seeder;
use App\Entities\Operativo;

class OperativosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 1;
        $nuevoOperativo->nombre = 'Concordia';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-01';
        $nuevoOperativo->horario = '09:00';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
        	'provincia' => 'ENTRE RIOS',
        	'municipio' => 'CONCORDIA'
        ]);


		$nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 2;
        $nuevoOperativo->nombre = 'San Martin';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '13:30';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
        	'provincia' => 'BUENOS AIRES',
            'municipio' => 'GENERAL SAN MARTIN',
            'calle' => 'Gral. J.M. de Rosas',
            'numero' => '3109',
            'localidad' => 'JOSÉ LEON SUAREZ'

        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 3;
        $nuevoOperativo->nombre = 'Avellaneda';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '13:30';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
        	'provincia' => 'BUENOS AIRES',
            'municipio' => 'AVELLANEDA',
            'calle' => 'Av. B. Mitre',
            'numero' => '5000',
            'localidad' => 'VILLA DOMÍNICO'
       
        ]);

		$nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 4;
        $nuevoOperativo->nombre = 'Almirante Brown';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '13:30';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
        	'provincia' => 'BUENOS AIRES',
            'municipio' => 'ALMIRANTE BROWN',
            'calle' => 'Murature',
            'numero' => '3045',
            'localidad' => 'RAFAEL CALZADA'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 5;
        $nuevoOperativo->nombre = 'La Matanza';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '17:00';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
        	'provincia' => 'BUENOS AIRES',
            'municipio' => 'LA MATANZA',
            'calle' => 'Av. Juan Domingo Perón',
            'numero' => '2230',
            'localidad' => 'SAN JUSTO'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 6;
        $nuevoOperativo->nombre = 'Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '15:00';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
        	'provincia' => 'CHACO',
        ]);


        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 7;
        $nuevoOperativo->nombre = 'Moron';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-22';
        $nuevoOperativo->horario = '15:00';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'BUENOS AIRES',
            'municipio' => 'MORÓN',
            'calle' => 'Blas Parera',
            'numero' => '135',
            'localidad' => 'CASTELAR'
            

        ]);


        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 8;
        $nuevoOperativo->nombre = 'Hurlingham';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-22';
        $nuevoOperativo->horario = '15:00';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'BUENOS AIRES',
            'municipio' => 'HURLINGHAM',
            'calle' => 'Gral. Pedro Díaz',
            'numero' => '1550',
            'localidad' => 'WILLIAM C. MORRIS'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 9;
        $nuevoOperativo->nombre = 'San Fernando';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-22';
        $nuevoOperativo->horario = '15:00';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'BUENOS AIRES',
            'municipio' => 'SAN FERNANDO',
            'calle' => 'Juan Carlos Reguera',
            'numero' => '1449',
            'localidad' => 'SAN FERNANDO'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 10;
        $nuevoOperativo->nombre = 'EGB 802 - Castelli - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'CASTELLI'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 11;
        $nuevoOperativo->nombre = 'EGB 255 - Castelli - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'CASTELLI'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 12;
        $nuevoOperativo->nombre = 'Playón Deportivo Municipal - Villa Río Bermejito - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'VILLA RÍO BERMEJITO'
        ]);


        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 13;
        $nuevoOperativo->nombre = 'EGB 680 - Miraflores - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'MIRAFLORES'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 14;
        $nuevoOperativo->nombre = 'CIC - El Espinillo - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-20';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'EL ESPINILLO'
        ]);


        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 15;
        $nuevoOperativo->nombre = 'CEP 97 - Misión Nueva Pompeya - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-21';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'MISIÓN NUEVA POMPEYA'
        ]);


        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 16;
        $nuevoOperativo->nombre = 'CIC - Fuerte Esperanza - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-21';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'FUERTE ESPERANZA'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 17;
        $nuevoOperativo->nombre = 'Salón Comunitario Municipal - El Sauzalito - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-21';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'EL SAUZALITO'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 18;
        $nuevoOperativo->nombre = 'NIDO (Centro Comunitario) (Dirección: Quinta Martínez S/N) - Tres Isletas - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-21';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'TRES ISLETAS'
        ]);


        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 19;
        $nuevoOperativo->nombre = 'Club Deportivo Municipal (Dirección: por  Malvinas entre Resistencia y Sarmiento) - Pampa Del Infierno - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-22';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'PAMPA DEL INFIERNO'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 20;
        $nuevoOperativo->nombre = 'Salón Municipal (Dirección: Juan Domingo Perón y Sarmiento) - LOS FRENTONES - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-22';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'LOS FRENTONES'
        ]);

        $nuevoOperativo = new Operativo();
        $nuevoOperativo->id = 21;
        $nuevoOperativo->nombre = 'Salón Municipal (Dirección: Roque Saenz Peña 515) - CONCEPCIÓN DEL BERMEJO - Chaco';
        $nuevoOperativo->programas_id = 1;
        $nuevoOperativo->dia = '2020-01-22';
        $nuevoOperativo->horario = '8 a 18 hs';
        $nuevoOperativo->save();

        $nuevoOperativo->Geos()->create([
            'provincia' => 'CHACO',
            'localidad' => 'CONCEPCIÓN DEL BERMEJO'
        ]);




    }
}
