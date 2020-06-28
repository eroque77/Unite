<?php

$data=array(
    'nome'=> $_POST['nome'],
    'cpf'=> $_POST['cpf'],
    'endereco'=> $_POST['endereco'],
    'bairro'=> $_POST['bairro'],
    'cidade'=> $_POST['cidade'],
    'uf'=> $_POST['uf'],     
);

$url = 'localhost/Unite/api/clientes';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);

echo $response_json;