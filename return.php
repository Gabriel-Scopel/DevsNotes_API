<?php
header("Access-Control-Allow-Origin:*"); //permite que qualquer site faça requisições a nossa API
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); //permite todos esses tipos de requisições
header("Content-Type: application/json"); //informa que sempre retornaremos um json nessa API
json_encode($array); //transforma o array em json para ser retornado dps
exit;