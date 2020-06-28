<?php

$url = 'localhost/Unite/api/clientes/'.$_POST['id'];
$ch = curl_init ($url);
curl_setopt ($ch, CURLOPT_HTTPGET, true);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec ($ch);
curl_close ($ch);

echo $response_json;