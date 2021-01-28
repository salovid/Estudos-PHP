<?php

session_start();
require '../admin/config.php';
require '../functions.php';

comprovarSessao();

$conexao = conexao($bd_config);
if(!$conexao){
    header ('Location: ../error.php');
}

#verificar se os dados foram enviados pelo formulario editar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = limparDados($_POST['id']);
   $titulo = limparDados($_POST['titulo']);
   # $extrato = limparDados($_POST['extrato']);
    #$titulo = $_POST['titulo'];
    $extrato = $_POST['extrato'];
    
    $texto = $_POST['texto'];
    $thumb_guardada = limparDados($_POST['thumb-guardada']);  #vide o form de editar.view.php
    $thumb = $_FILES['thumb'];
    
    if (empty($thumb['name'])){
      $thumb = $thumb_guardada;
    } else{
       $arquivo_subido = '../' . $blog_config['pasta_imagens'] . $_FILES['thumb']['name'];
       move_uploaded_file($_FILES['thumb']['tmp_name'], $arquivo_subido);
       $thumb = $_FILES['thumb']['name'];
    }
     #atualizando tabela banco de dados
    $statement = $conexao->prepare(        'UPDATE artigos SET   titulo = :titulo,
            extrato = :extrato,
            texto = :texto,
            thumb = :thumb
          WHERE id = :id '
    );
    
    $statement->execute(array(
        ':titulo'=> $titulo,
        'extrato'=> $extrato,
        ':texto'=> $texto,
        ':thumb'=> $thumb,
        ':id'=> $id
    ));
    
    header ('Location: ' . ROTA . 'admin');
    
}else{ $id_artigo = id_artigo($_GET['id']);
  if(empty($id_artigo)) {
    header ('Location:' . ROTA . 'admin');
  }
 
  $post = obter_post_por_id($conexao, $id_artigo);
  
  if(!$post){
    header('Location: ' . ROTA . 'admin');
  }
 # print_r($post[0]);
   $post = $post[0];
}


require '../views/editar.view.php'

?>
