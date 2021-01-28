<?php
session_start();
require '../admin/config.php';
require '../functions.php';

comprovarSessao();

$conexao = conexao($bd_config);
if(!$conexao){
header ('Location: ../error.php');
}

 $id = limparDados($_GET['id']);

if(!$id) {
  header ('Location ' .ROTA . 'admin');
}

    $statement = $conexao->prepare('DELETE FROM artigos WHERE id= :id' );
    $statement -> execute(array('id'=>$id));
    
    header('Location: ' . ROTA . 'admin' ) ;

?>