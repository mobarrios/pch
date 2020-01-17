<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\BancoRepo as Repo;
use Illuminate\Routing\Route;

class BancoController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'pch.banco';

        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }

    public function edit()
    {
        $this->data['model']= $this->repo->find($this->route->id);
        $this->data['banco_id'] = $this->route->id;    
        return view(config($this->confFile.".viewForm"))->with($this->data);
    }
}
