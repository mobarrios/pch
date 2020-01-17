<?php

namespace app\http\Controllers\Configs;


use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo as Repo;
use Illuminate\Routing\Route;

class PermissionsController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $this->confFile = 'configs.permissions';
        $this->data['confFile'] = 'configs.permissions';
    }
}
