<?php namespace App\Http\Repositories;


//use App\Entities\Log;

use App\Http\Functions\ApiUnidbFunction;

abstract class BaseRepo
{
    protected $model;
    protected $api;

    public function __construct(ApiUnidbFunction $api)
    {
        $this->model = $this->getModel();
        $this->api = $api;
    }

    public abstract function getModel();

    public function getAllPaginated($paginate)
    {
        return $this->model->paginate($paginate);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(Array $datos)
    {
        return $this->model->create($datos);
    }

    public function edit($model, Array $datos)
    {
        $model->fill($datos);
        $model->save();

        return $model;
    }

    public function instanciar(Array $datos = [])
    {
        $model = $this->getModel();
        if (count($datos) > 0)
            $model->fill($datos);

        return $model;
    }

    public function createLog($model, $idUser, $action, $type = 'default', $titulo = '', $timelineTitulo = null, $timelineBody = '', $timelineShow = true)
    {
        $log = new Log();
        $log->user_id = $idUser;
        $log->titulo = $titulo;
        $log->action = $action;
        $log->type = $type;
        $log->timeline_show = $timelineShow;
        $log->timeline_titulo = (!is_null($timelineTitulo)) ? $timelineTitulo : $titulo;
        $log->timeline_body = $timelineBody;

        $model->logs()->save($log);

        return $log;
    }

    public function delete($model)
    {
        $model->delete();

        return true;
    }

    public function select($campo = 'name',$indice = 'id')
    {
        return $this->model->all()->pluck($campo,$indice);

    }



    /**
     * Listado de areas filtradas (o no) por tipo
     * @param null $areas
     * @param null $type
     * @return array|null
     */
    public function getAreas($areas = null, $type = null)
    {
        $this->api->getAreas($areas,$type);

        if ($this->api->getHttpCode() != 200) abort(500);

        $result = $this->api->getResultado()->results;

        $areas = [];

        foreach($result as $area):
            $areas[$area->id] = $area->fullname;
        endforeach;

        return $areas;
    }



    /**
     * Listado de areas dependientes de otra
     * @param null $areas
     * @return array|null
     */
    public function getChildrensAreas($areas = null)
    {
        $this->api->getChildrensAreas($areas);

        if ($this->api->getHttpCode() != 200) abort(500);

        $result = $this->api->getResultado()->results;

        $areas = [];

        foreach($result as $area):
            $areas[$area->id] = $area->fullname;
        endforeach;

        return $areas;
    }


    /**
     * Listado de todos los tipos de áreas
     * @return array
     */
    public function getTypes(){
        $this->api->getTypes();

        if ($this->api->getHttpCode() != 200) abort(500);

        $result = $this->api->getResultado()->results;

        $tipos = [];

        foreach($result as $tipo):
            $tipos[$tipo->id] = $tipo->fullname;
        endforeach;

        return $tipos;
    }

    /**
     * Traer un area por id
     * @param $id
     * @return array
     */
    public function getArea($id){
        $this->api->getAreasById($id);

        if ($this->api->getHttpCode() != 200) abort(500);

        $result = $this->api->getResultado()->result;

        $area = [$result->id => $result->fullname];

        return $area;

    }


    /**
     * Listado de provincias
     * @return array
     */
    public function getProvincias(){
        $this->api->getProvincias();

        if ($this->api->getHttpCode() != 200) abort(500);

        $provincias = $this->api->getResultado()->results;

        return collect($provincias)->toArray();

    }


    /**
     * Localidades por provincias
     * @return array
     */
    public function getLocalidadesByProvincias($cod_provincia){
        $this->api->getLocalidadesByProvincias($cod_provincia);

        if ($this->api->getHttpCode() != 200) abort(500);

        $localidades = $this->api->getResultado()->results;

        return collect($localidades);

    }

    /**
     * Listar localidades de provincias
     * @return array
     */
    public function listLocalidadesByProvincias($cod_provincia){
        $localidades = $this->getLocalidadesByProvincias($cod_provincia);

        $localidades = $localidades->pluck('nombre_bahra','cod_bahra');

        return $localidades;

    }


    /**
     * Buscar localidad por id_bahra
     * @param $id_bahra
     * @return array
     */
    public function getLocalidad($id_bahra){

        $this->api->getLocalidad($id_bahra);

        if ($this->api->getHttpCode() != 200) abort(500);

        $localidad = $this->api->getResultado()->results;

        return collect($localidad);

    }

    /**
     * Traer una provincia por su codigo de provincia
     * @param $cod_provincia
     * @return \Illuminate\Support\Collection
     */
    public function getProvincia($cod_provincia){
        $this->api->getProvincia($cod_provincia);

        if ($this->api->getHttpCode() != 200) abort(500);

        $provincia = $this->api->getResultado()->results;

        return collect($provincia);

    }
}
