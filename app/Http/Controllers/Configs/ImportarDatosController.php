<?php

namespace app\http\Controllers\Configs;


use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo as Repo;
use Illuminate\Routing\Route;
use App\Entities\NuevoPadron;
use App\Entities\Persona;
use App\Entities\PersonaTarjetas;
use App\Entities\EstadoCivil;
use App\Entities\Banco;
use App\Entities\Genero;
use App\Entities\Operativo;
use App\Entities\TipoDocumento;
use App\Entities\Tarjeta;
use App\Entities\NuevaSucursal;
use App\Entities\Sucursal;
use App\Entities\PersonaDiaHorario;
use DB;

class ImportarDatosController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo 			= $repo;
        $this->route 			= $route;
        $this->confFile 		= 'configs.permissions';
        $this->data['confFile'] = 'configs.permissions';
    }


    public function nuevoPadron(){

    	$padrones = NuevoPadron::all();
        dd('nuevo padron');
        //DB::beginTransaction();

        //try{

            foreach ($padrones as $padron) {

            // Nueva Persona
            $persona                    =   new Persona();
            $persona->nombre            =   $padron->NOMBRE;
            $persona->apellido          =   $padron->APELLIDO;
            $persona->tipo_doc          =   $padron->TIPO_DOC;
            $persona->nro_documento     =   $padron->NRO_DOC;
            $persona->fecha_nacimiento  =   $padron->FECHA_NACIMIENTO;
            $persona->mail              =   $padron->MAIL;
            $persona->telefono          =   $padron->TELEFONO;
            $persona->cuit              =   $padron->CUIL;
            $persona->save();

            // Nueva Localizacion
            $persona->geos()->create([ 

                'pais'          => $padron->PAIS,
                'provincia'     => $padron->PROVINCIA, 
                'localidad'     => $padron->LOCALIDAD,
                'municipio'     => $padron->Municipio,
                'calle'         => $padron->CALLE,
                'numero'        => $padron->NUMERO,
                'piso'          => $padron->PISO,
                'depto'         => $padron->DEPTO,
                'cod_post'      => $padron->COD_POSTAL,


             ]);


            //busca sucursal 
            
            $sucursal = Sucursal::where('cod',2718)->first();

            // Tarjeta
            $tarjeta            =   new Tarjeta();
            $tarjeta->importe   =   $padron->monto;
            $tarjeta->numero    =   '0000022222223';
            $tarjeta->numero_cuenta = 'ASD131312313';
            $tarjeta->retiro_operativo = 0;
            $tarjeta->retiro_sucursal = 0;
            $tarjeta->sucursales_id = $sucursal->id;
            $tarjeta->retiro_fecha =  '2020-01-01';
            $tarjeta->retiro_hora = '13:00';
            $tarjeta->save();

            // Tarjeta Persona
            //$personasTarjetas                   = new PersonaTarjetas();
            //$personasTarjetas->tarjetas_id      = $tarjeta->id;
            //$personasTarjetas->personas_id      = $persona->id;
            //$personasTarjetas->operativos_id    = 2;  
            //$personasTarjetas->save();

            $personasTarjetas                   = new PersonaTarjetas();
            $personasTarjetas->tarjetas_id      = $tarjeta->id;
            $personasTarjetas->personas_id      = $persona->id;
            $personasTarjetas->save();


            // OPERATIVO ID
            $operativos_id                      = 1;
            $persona->Operativo()->attach($operativos_id);
            

            echo $persona->nro_documento .'<br>'; 

            }

        //}catch(Exception $e){
        //    DB::rollback();
        //    return redirect()->back()->withErrors($e->getMessage());
        //}   

        //DB::commit();
        //return redirect()->back('Registros creados ok');
    	dd('nuevo padron creado');

    }

  
    public function NuevasSucursales(){

        $nuevas =  DB::table('nuevas_sucursales')->get();

        foreach($nuevas as $n){

            if($n->CODIGO != 0){

            $sucursal               = new Sucursal();
            $sucursal->cod          = $n->CODIGO;
            $sucursal->nombre       = $n->SUCURSAL;
            $sucursal->bancos_id    = 1;
        
            $sucursal->save();

            $sucursal->geos()->create([ 


                'provincia'     => $n->PROVINCIA, 
                'localidad'     => $n->LOCALIDAD,
                'municipio'     => $n->DOMICILIO,
                'cod_post'      => $n->CODG_POSTAL ,


            ]);

            }
        }    
        dd('sucursales creadas');
        //return redirect()->back('Registros creados ok');
    }

    public function nuevasPersonasOperativos(){


        $padrones = NuevoPadron::all();
        //$personas = Persona::all();
        //dd($personas->count());

            foreach ($padrones as $padron) {

            // Nueva Persona
            $persona                    =   new Persona();
            $persona->nombre            =   $padron->NOMBRE;
            $persona->apellido          =   $padron->APELLIDO;
            $persona->tipo_doc          =   $padron->TIPO_DOC;
            $persona->nro_documento     =   $padron->NRO_DOC;
            $persona->fecha_nacimiento  =   $padron->FECHA_NACIMIENTO;
            $persona->mail              =   $padron->MAIL;
            $persona->telefono          =   $padron->TELEFONO;
            $persona->cuit              =   $padron->CUIL;
            $persona->save();

            // Nueva Localizacion
            $persona->geos()->create([ 

                'pais'          => $padron->PAIS,
                'provincia'     => $padron->PROVINCIA, 
                'localidad'     => $padron->LOCALIDAD,
                'municipio'     => $padron->Municipio,
                'calle'         => $padron->CALLE,
                'numero'        => $padron->NUMERO,
                'piso'          => $padron->PISO,
                'depto'         => $padron->DEPTO,
                'cod_post'      => $padron->COD_POSTAL,

             ]);


            // Tarjeta
            $tarjeta                            =  new Tarjeta();
            $tarjeta->importe                   =  $padron->monto;
            $tarjeta->save();
            
            // Personas Tarjetas  
            $personasTarjetas                   = new PersonaTarjetas();
            $personasTarjetas->tarjetas_id      = $tarjeta->id;
            $personasTarjetas->personas_id      = $persona->id;
            $personasTarjetas->save();

            // OPERATIVO ID
            $operativos_id                      = $padron->ID_OPERATIVOS;
            $persona->Operativo()->attach($operativos_id);


        }   

        dd('personas operativos creado');

    }

    public function personasDiasHorarios(){

            $personasDiasHorarios   = PersonaDiaHorario::all();

            foreach ($personasDiasHorarios as $personaDiaHorario){
                
                //Busco persona
                $persona            = Persona::where('nro_documento',$personaDiaHorario->NRO_DOC)->first();
           
            
                    //Busco persona con tarjeta
                    $personaTarjeta                 = PersonaTarjetas::where('personas_id', $persona->id)->first();

                    //Tarjeta de la persona
                    $tarjeta                        = Tarjeta::find($personaTarjeta->tarjetas_id);

                    $tarjeta->retiro_fecha          = $personaDiaHorario->OPERATIVO_DIA;
                    $tarjeta->retiro_hora           = $personaDiaHorario->OPERATIVO_HORARIO;
                    $tarjeta->save();

                    echo ($persona .  $tarjeta);

                }    

            

            dd('personas dias y horarios ok');
    }


}
