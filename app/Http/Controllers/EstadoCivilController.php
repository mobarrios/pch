<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\EstadoCivilRepo as Repo;
use Illuminate\Routing\Route;

class EstadoCivilController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'pch.estado_civil';

        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }
}
