<?php


namespace App\Http\Functions;


class ApiUnidbFunction
{
    protected $apiKey;
    protected $curl;
    protected $header;
    protected $httpResultado;
    protected $httpCode;
    protected $urlBase;

    /**
     * ApiUnidbFunction constructor.
     */
    public function __construct()
    {
        $apiKey         = env('API_MDS_KEY', '');
        $this->urlBase  = env('API_MDS_URL');
        $this->header   = [
            'Content-Type: application/json',
            'X-DreamFactory-Api-Key: ' . $apiKey,
        ];
    }

    /**
     * @param string $url
     * @param string $method
     * @param array $body
     */
    public function call($url = '', $method = 'GET', Array $body = [])
    {
        # Abro conexión
        $this->_init($url);

        # Método
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, $method);

        # Si tiene parámetros en el body
        if (count($body) > 0)
            curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($body));

        # Ejecuto
        $this->httpResultado = $this->_exec();
        $this->httpCode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);

        # Cierro
        $this->_close();
    }

    /**
     * @return mixed
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    /**
     * @return mixed
     */
    public function getResultado()
    {
        return json_decode($this->httpResultado);
    }

    protected function _close()
    {
        curl_close($this->curl);
    }

    /**
     * @return mixed
     */
    protected function _exec()
    {
        return curl_exec($this->curl);
    }

    /**
     * @param $url
     */
    protected function _init($url)
    {
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
    }

    /**
     * Listado de sedes
     */
    public function getSedes(){

        $this->call(env('API_MDS_URL').'/unidb/sedes?search='.'&limit=500');

    }

    /**
     * Listado de áreas filtradas (o no) por tipo
     * @param null $search Qué busca
     * @param null $type Tipo de área (type_id)
     */
    public function getAreas($search = null, $type = null){

        $this->call(env('API_MDS_URL').'/unidb/areas?search='.$search.'&limit=500&type='.$type);

    }

    /**
     * Buscar áreas por area_id
     * @param $id
     */
    public function getAreasById($id){

        $this->call(env('API_MDS_URL').'/unidb/areas/'.$id);

    }

    /**
     * Listado de áreas dependientes de otra
     * @param $id
     */
    public function getChildrensAreas($id){

        $this->call(env('API_MDS_URL').'/unidb/areas/childrens/'.$id);

    }


    /**
     * Listado de áreas por type_id
     * @param $id
     */
    public function getAreasByType($id){

        $this->call(env('API_MDS_URL').'/unidb/areas?type='.$id);

    }

    /**
     * Listado de tipos de áreas
     */
    public function getTypes(){
        $this->call(env('API_MDS_URL').'/unidb/types');
    }


    /**
     *  Buscar por departamente, provincia o localidad en el BAHRA
     *
     * @param $depto
     * @param $provincia
     * @param $nombre_bahra
     * @param int $limit
     * @return array
     */
    public function findBahra($depto, $provincia, $nombre_bahra, $limit = 100){

        $this->call(env('API_MDS_URL').'/unidb/bahra?departamento='. urlencode(str_replace(" ", "_", $depto)) .'&provincia='.urlencode(str_replace(" ", "_", $provincia)).'&nombre_bahra='.urlencode(str_replace(" ", "_", $nombre_bahra)).'&limit='.$limit);
        //https://api.mds.gob.ar/api/v2

    }

    /**
     * Traer el listado de provincias
     * @return array
     */
    public function getProvincias(){
        $this->call(env('API_MDS_URL').'/unidb/bahra/provincias');

    }

    public function getLocalidadesByProvincias($cod_provincia){

        $this->call(env('API_MDS_URL').'/unidb/bahra/localidades?provincia='.$cod_provincia);

    }

    public function getLocalidad($id_bahra){
        $this->call(env('API_MDS_URL').'/unidb/bahra/localidades/'.$id_bahra);

    }

    public function getProvincia($cod_provincia){
        $this->call(env('API_MDS_URL').'/unidb/bahra/provincias/'.$cod_provincia);

    }


}