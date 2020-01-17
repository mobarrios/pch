<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\SucursalRepo as Repo;
use Illuminate\Routing\Route;
use App\Entities\Sucursal;
use Illuminate\Support\Facades\Auth;

class SucursalController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'pch.sucursal';

        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }

    public function edit()
    {
        $this->data['banco_id'] = $this->route->id;
        $this->data['model']= $this->repo->find($this->route->sucursal_id);
        return view(config($this->confFile.".viewForm"))->with($this->data);
    }

    public function index()
    {
        $this->data['banco_id'] = $this->route->id;
        //  dd($this->data['banco_id']);
        $this->data['datas'] = Sucursal::where('bancos_id', '=', $this->data['banco_id'])->get();
        return view(config($this->confFile.".viewIndex"))->with($this->data);
    }

    public function store(Request $request)
    {
        //validacion del formulario
        $request->validate(config($this->confFile.'.validationsStore'));
        $this->repo->create($request->all());
        return redirect()->route(config($this->confFile.".viewIndex"), $this->route->id )->with('success','Registro Creado.');
    }

    public function create()
    {
        $this->data['banco_id'] = $this->route->id;        
        return view(config($this->confFile.".viewForm"))->with($this->data);
    }

    public function update(Request $request)
    {
        $request->validate(config($this->confFile.'.validationsUpdate'));
        $model = $this->repo->getModel()->find($this->route->sucursal_id);
        
     
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

        $model = $this->repo->getModel()->find($this->route->sucursal_id);        
        $model->geos()->update($request->only('calle','numero','latitud','longitud'));

        $this->data['banco_id'] = $this->route->id;        
        return redirect()->route(config($this->confFile.".viewIndex"),$this->data['banco_id'])->with('success','Registro Editado.');
    }

    public function destroy()
    {
        $model = $this->repo->find($this->route->sucursal_id);
        $model->delete();
        $this->data['banco_id'] = $this->route->id;    
        return redirect()->route(config($this->confFile.".viewIndex"),$this->data['banco_id'])->with('success','Registro Eliminado.');
    }
}
