<?php
/* Script que busca informações de dados abertos



*/
/** Câmara dos Deputados */
    $param = "92346";
    $url = "https://dadosabertos.camara.leg.br/api/v2/deputados/$param";

    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($client);
    $result = json_decode($response);

    echo "Nome: " . $result->dados->nomeCivil . "<br>";
    echo "Estado: " . $result->dados->ultimoStatus->siglaUf . "<br>";
    echo "Partido: " . $result->dados->ultimoStatus->siglaPartido;



    
?>