<?php
require 'admin/config.php';

require 'functions.php';

$conexao = conexao($bd_config);
$id_artigo = id_artigo($_GET['id']);

if(!$conexao) {
     header('Location:error.php');
}



if (empty($id_artigo)){
  # header('Location:index.php');
   
 

$id_artigo = 1;
}

$post = obter_post_por_id($conexao, $id_artigo);
/* if(!$post) {
     header('Location:index.php');
 } */
 
 $post = $post[0];
 
#print_r($post);


require 'views/single.view.php';

?>