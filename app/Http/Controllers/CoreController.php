<?php

namespace app\http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CoreRepo as Repo;
use Illuminate\Routing\Route;


class CoreController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'core';

        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }

}
