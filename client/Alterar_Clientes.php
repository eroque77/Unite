<?php

//Atualizar ao executar
$data=array(
    'nome' =>$_POST['nome'],
    'cpf' => $_POST['cpf'], 
    'endereco' =>$_POST['endereco'],
    'bairro' => $_POST['bairro'], 
    'cidade' =>$_POST['cidade'],
    'uf' => $_POST['uf'],   
);

$url = 'localhost/Unite/api/clientes/'.$_POST['id'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
echo $response_json;

?>