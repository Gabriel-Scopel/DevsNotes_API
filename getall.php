<?php
//essa página getall é responsável por listar as notas do banco
require('./config');

$method = strtolower($_SERVER['REQUEST_METHOD']); //pegando o tipo de requisição 

if($method === 'get'){ 
    $sql = $pdo->query("SELECT * FROM notes");
    if($sql->rowCount()>0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC); //pegando as informações do banco e colocando num array
        foreach($data as $item){
            //colocando as informações no nosso array de retorno
            $array['result'][] = [
                'id' => $item['id'],
                'title' => $item['title']
            ];
        }
    }
}else{
    $array['errro'] = "metodo não permitido";
}

require('../return.php');