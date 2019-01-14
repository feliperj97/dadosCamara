<?php
/* Script que busca informações sobre blocos partidários

1) TO DOS
- Inserir informações sobre deputados

*/
    $param = "571";
    $url = "https://dadosabertos.camara.leg.br/api/v2/blocos/$param";

    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($client);
    $result = json_decode($response);

    echo "Partidos: " . $result->dados->nome . "<br>";
    echo "Id Legislatura: " . $result->dados->idLegislatura . "<br>";
    
?>