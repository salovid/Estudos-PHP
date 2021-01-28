<?php
  require 'admin/config.php';
  
  require 'functions.php';
  
  $conexao = conexao($bd_config);
  if(!$conexao){
    header('Location: error.php');
  }
 
  
  $posts = obter_post($blog_config['post_por_pagina'],$conexao );
  
  if (!$posts)  {
    header('Location: error.php');
  }
  
  #print_r($post);
#echo pagina_atual();

  require 'views/index.view.php';

?>
