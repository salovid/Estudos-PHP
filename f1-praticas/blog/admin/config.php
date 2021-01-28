<?php
  define('ROTA', 'http://localhost/curso-php/f1-praticas/blog/');
  
  $bd_config = array(
         'banco_dados' =>'blog_pratica' ,
         'usuario' => 'root',
         'pass' => ''
  );
  
  $blog_config = array(
    'post_por_pagina' => '2',
     'pasta_imagens' => 'imagens/'   #é o nome idêntico da pasta imagens.
  );
  
  $blog_admin = array (
    'usuario'=>'joao',
      'password'=>'123'
  );

?>