<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\BancoRepo as Repo;
use Illuminate\Routing\Route;
use App\Entities\Programas;
use App\Entities\Persona;
use App\Entities\Operativo;
use App\User;
use App\Entities\OperativoPersona;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo     = $repo;
        $this->route    = $route;
        $confFile       = 'pch.banco';

        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }

    public function index(){

        $operativo = DB::table('operativos')
        ->join('operativos_personas','operativos_personas.operativos_id','=','operativos.id')
        ->select('nombre','dia',DB::raw('count( operativos_personas.id) as cantidad'))
        ->where('operativos_personas.concurrio',1)
        ->groupBy('operativos.id')
        ->get();


        return view('reportes.index', compact('operativo'));
    }


}
