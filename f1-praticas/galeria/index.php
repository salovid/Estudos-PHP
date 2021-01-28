<?php

require 'funcoes.php' ;

  $fotos_por_pagina =  8;
  
  $pagina_atual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
  $inicio =($pagina_atual > 1) ? $pagina_atual * $fotos_por_pagina - $fotos_por_pagina : 0;
  
  $conexao = conexao('galeria_pratica', 'root', '');
  
  if(!$conexao){
    die();
  }
  
  #trazendo as fotos da base de dados
  $statement = $conexao ->prepare("
        SELECT  SQL_CALC_FOUND_ROWS * FROM  fotos LIMIT $inicio, $fotos_por_pagina
        ");
  $statement -> execute();
  $fotos = $statement->fetchAll();
  
    #se não tem fotos
  if(!$fotos) {
    header('Location: index.php');
  }
  
  #print_r($fotos);

  $statement = $conexao ->prepare("SELECT FOUND_ROWS() as total_filas");
  $statement ->execute();
  $total_post = $statement->fetch()['total_filas'];
  
  $total_paginas = ceil(($total_post / $fotos_por_pagina));
  
  
require 'views/index.view.php';


  
?>
