<?php

require 'funcoes.php';

$conexao = conexao('galeria_pratica', 'root', '');
if(!$conexao ){
     die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id) {
    header('Location: index.php');
}

    $statement = $conexao->prepare('SELECT * FROM fotos WHERE id= :id');
    $statement->execute(array(':id'=>$id));
    
    $foto = $statement->fetch();
    
    if(!$foto){
        header('Location:index.php');
    }

require 'views/foto.view.php';

?>
