<?php

class Api
{
    public function Conexao()
    {
        try {
            // Inicia uma sessão cURL
            $curlSession = curl_init();

            // Define as opções da sessão
            curl_setopt($curlSession, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/todos');

            // Executa a sessão e obtém os dados em JSON
            $jsonData = json_decode(curl_exec($curlSession));

            // Fecha a sessão
            curl_close($curlSession);

            // Imprime os dados em um array PHP
            print_r($jsonData);
        } catch (PDOException $objErro) {
            echo 'SGBD Indisponivel: ' . $objErro->getMessage();
            exit();
        }
    }
}
