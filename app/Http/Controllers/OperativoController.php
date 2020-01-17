<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\OperativoRepo as Repo;
use Illuminate\Routing\Route;
use App\Entities\Operativo;
use App\Entities\Persona;
use App\Entities\UsuarioOperativo;
use App\User;
use App\Entities\OperativoPersona;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;


use Illuminate\Support\Facades\Auth;

class OperativoController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'pch.operativo';

        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }




    public function buscarPost(Request $request)
    {
  
        if ($request->buscar != null)
        {
            $id_user = Auth::id();
           

            $operativos_autorizados = User::find($id_user)->Operativo()->select('operativos.id')->get();
           
            //  dd($operativos_autorizados);

            $this->data['datas'] = collect();

            // foreach ($operativos_autorizados as $operativo_autorizado)
            // {


                    
                $datos = Persona::where('nro_documento','like', '%'.$request->buscar.'%')                                                                  
                                    ->orWhere(DB::Raw("CONCAT(personas.apellido ,' ', personas.nombre)"), 'like', '%'.$request->buscar.'%')
                                    ->join('operativos_personas', 'operativos_personas.personas_id', '=', 'personas.id')
                                    // ->join('users_operativos', 'users_operativos.operativos_id', '=', 'operativos_personas.operativos_id')
                                    ->whereIn('operativos_personas.operativos_id',  $operativos_autorizados)
                                    ;

                $this->data['datas'] = $this->data['datas']->merge($datos->get());

            // }
            
            $this->data['datas'] = $this->data['datas']->take(50);

            return view(config($this->confFile.".viewBuscar"))->with($this->data);
                 
        }
        else
        {       
            return view(config($this->confFile.".viewBuscar"))->with($this->data);
        }
    }

    public function buscar(Request $request)
    {   

        if ($request->has('buscar_nombre'))
        {
            $this->data['datas'] = Operativo::where('n_doc','like', $request->buscar_nombre );
            return view(config($this->confFile.".viewBuscar"))->with($this->data);

        }
        else
        {
            return view(config($this->confFile.".viewBuscar"))->with($this->data);
        }
    }

    public function updateConcurrio(Request $request, $persona_id, $operativo_id)
    {
     
        $id_user = Auth::id();
           
        $operativos_autorizados = User::find($id_user)->Operativo()->get();
        
        foreach ($operativos_autorizados as $operativo_autorizado)
        {
            if ($operativo_id == $operativo_autorizado->id)
            {
                $model = OperativoPersona::where('personas_id', '=', $persona_id)->where('operativos_id', '=', $operativo_id)->first();

                if ($model->concurrio == 1)
                {
                    $model->concurrio = 0;
                }
                else
                {
                    $model->concurrio = 1;
                }

                $model->save();

                return "OK";
            }

        }
       
        return "Error";
        
      
    }



    public function edit()
    {
        $this->data['programa_id'] = $this->route->id;
        $this->data['usuarios'] = User::pluck('name','id');
    
        $this->data['usuarios_autorizados'] = UsuarioOperativo::where('operativos_id','=', $this->route->operativo_id)->pluck('usuarios_id')->toArray() ;

        $this->data['model']= $this->repo->find($this->route->operativo_id);
        $this->data['operativos_id']= $this->route->operativo_id;
        return view(config($this->confFile.".viewForm"))->with($this->data);
    }

    public function index()
    {
        $this->data['programa_id'] = $this->route->id;

        $this->data['datas'] = Operativo::where('programas_id', '=', $this->data['programa_id'])->get();
        return view(config($this->confFile.".viewIndex"))->with($this->data);
    }

    public function store(Request $request)
    {
        //validacion del formulario
        $request->validate(config($this->confFile.'.validationsStore'));       
        $operativo = $this->repo->create($request->all());      
        
        if ($request->has('usuarios_id'))
        {
            foreach ($request->usuarios_id as $usuario )
            {
                UsuarioOperativo::create(['usuarios_id' => $usuario, 'operativos_id' => $operativo->id]); 
    
            }
        }

        return redirect()->route(config($this->confFile.".viewIndex"), $this->route->id )->with('success','Registro Creado.');
    }

    public function create()
    {
        $this->data['usuarios'] = User::pluck('name','id');
        $this->data['programa_id'] = $this->route->id; 
        $this->data['usuarios_autorizados'] = null; 
        return view(config($this->confFile.".viewForm"))->with($this->data);
    }

    public function update(Request $request)
    {
        $request->validate(config($this->confFile.'.validationsUpdate'));
        $model = $this->repo->getModel()->find($this->route->operativo_id);
        
        $model->fill($request->all());
            //updateables
            if(config($this->confFile.'.updateable'))
            {
                $diffs = array_diff($model->getAttributes(),$model->getOriginal());
                foreach ($diffs as $diff => $a)
                {
                    $col = $diff;
                    $model->Updateables()->create(['users_id' => Auth::user()->id, 'column' => $col, 'new_data' => $model->$diff, 'old_data' => $model->getOriginal($diff)]);
                }
            }
        $model->save();

        $model = $this->repo->getModel()->find($this->route->operativo_id);    

        UsuarioOperativo::where('operativos_id','=', $this->route->operativo_id )->delete();

        foreach ($request->usuarios_id as $usuario ){
            UsuarioOperativo::create(['usuarios_id' => $usuario, 'operativos_id' => $this->route->operativo_id]); 

        }
        

        $model->geos()->update($request->only('calle','numero','latitud','longitud'));
        

        $this->data['programa_id'] = $this->route->id;        
        return redirect()->route(config($this->confFile.".viewIndex"),$this->data['programa_id'])->with('success','Registro Editado.');
    }

    public function destroy()
    {
        $model = $this->repo->find($this->route->operativo_id);
        $model->delete();
        $this->data['programa_id'] = $this->route->id;   
        UsuarioOperativo::where('operativos_id','=', $this->route->operativo_id )->delete(); 
        return redirect()->route(config($this->confFile.".viewIndex"),$this->data['programa_id'])->with('success','Registro Eliminado.');
    }
}
