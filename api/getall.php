<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']); 

if($method === 'get'){
    $sql = $pdo->query("SELECT * FROM notes");
    if($sql->rowCount()>0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        //adicionando os resultados da pesquisa no bando de dados no array de retorno
        foreach($data as $item){
            $array['result'][]=[
                'id'=>$item['id'],
                'title'=>$item['title']
            ];
        }
    }
}else{
    $array['error'] = 'Método não permitido (apenas GET)';
}


require('../return.php');