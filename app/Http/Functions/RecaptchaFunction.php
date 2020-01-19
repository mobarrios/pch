<?php

namespace App\Http\Functions;


class Recaptcha
{
    protected $apiKey;
    protected $token;
    protected $curl;
    protected $header;
    protected $httpResultado;
    protected $httpCode;
    protected $url;

    public function __construct($token)
    {
        $apiKey = env('RECAPTCHA_V3_SECRET_KEY', '');
        $this->url = 'https://www.google.com/recaptcha/api/siteverify';
        $this->token = $token;

        $this->header = [
            'Content-Type: application/json'
        ];
    }

    public function call($method = 'GET', Array $body = [])
    {
        # Abro conexión
        $this->_init($this->url);

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

    public function getHttpCode()
    {
        return $this->httpCode;
    }

    public function getResultado()
    {
        return json_decode($this->httpResultado);
    }

    protected function _close()
    {
        curl_close($this->curl);
    }

    protected function _exec()
    {
        return curl_exec($this->curl);
    }

    protected function _init($url)
    {
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $this->apiKey, 'response' => $this->token)));
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->header);
        //esto es para windows
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
        //
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
    }


    public function getCaptcha(){
        $respuesta = $this->call();
        

        $resultado = $this->getResultado();

        if ($resultado["success"] == '1' && $resultado["action"] == $action && $resultado["score"] >= 0.5) {

            $rta = true;

        } else {
            $rta = false;
        }

        return $rta;
    }

}