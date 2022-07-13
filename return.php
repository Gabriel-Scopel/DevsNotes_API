<?php
header("Access-Control-Allow-Origin: *");//autoriza outros sites a fazer requisição na API
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");//Autoriza tipos de requisições
header("Content-type: application/json");//informa o tipo de retorno padrão como sendo sempre como JSON
echo json_encode($array);//transforma array em json
exit;