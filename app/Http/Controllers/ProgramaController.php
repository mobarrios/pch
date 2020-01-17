<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ProgramaRepo as Repo;
use Illuminate\Routing\Route;

class ProgramaController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'pch.programa';

        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }
}
