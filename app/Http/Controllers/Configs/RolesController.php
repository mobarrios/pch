<?php

namespace app\http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo;
use App\Http\Repositories\Configs\RolesRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RolesController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'configs.roles';
        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }

    public function permissions(PermissionsRepo $permissionsRepo){

        $this->data['model']= $this->repo->find($this->route->id);
        $this->data['permissions'] = $permissionsRepo->getAll();

        return view('configs.roles.permissions')->with($this->data);
    }


    public function postPermissions(Request $request,PermissionsRepo $permissionsRepo)
    {
        $request->validate(config($this->confFile.'.validationsPermissions'));

        $role = $this->repo->getModel()->find($request->role_id);

        if(!is_null($request->permission)){

            $per = $permissionsRepo->getModel()->whereIn('id',$request->permission)->get();
            $role->syncPermissions($per);
        }



        return redirect()->route('configs.roles.index')->withErrors('Rol Actualizado Correctamente.');

    }
}
