<?php

class Api
{
    public function ConexaoApi()
    {
        $url = 'https://jsonplaceholder.typicode.com/todos';
        $curl =  curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resultado = json_decode(curl_exec($curl));
        return $resultado;
    }
}
