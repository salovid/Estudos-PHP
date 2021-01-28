<?php

// Arquivo index de Administração

    session_start();
    
    require 'config.php';
    require '../functions.php';
    
    $conexao = conexao($bd_config);  #funcao conexao vem de functions.php

    comprovarSessao();
    
    //Verificar Sessão
  if(!$conexao) {
      header('Location: ../error.php');
  }
  
  //carregar os posts
$posts = obter_post($blog_config['post_por_pagina'], $conexao);  #funcao obter_post veio da pasta functions.php da raiz do blog.



    require '../views/admin_index.view.php';

?>

