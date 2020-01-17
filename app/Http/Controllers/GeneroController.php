<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\GeneroRepo as Repo;
use Illuminate\Routing\Route;

class GeneroController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'pch.genero';

        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }
}
