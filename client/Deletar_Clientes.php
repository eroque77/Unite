<?php

//Deletar ao Executar
$url = 'localhost/Unite/api/clientes/'.$_POST['id'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
//$response=json_decode($response_json, true);

echo $response_json;

?>