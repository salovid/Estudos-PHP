<?php

   try {
       $conexao = new PDO('mysql:host=localhost; dbname=paginacao', 'root', '');
   
   }catch(PDOException $e) {
     echo "ERROR: " . $e -> getMessage() ;
     die();
   }
   
  $pagina= isset($_GET['pagina']) ? (int)$_GET['pagina']  : 1  ;
   $postPorPagina = 4;
   $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0 ;
   $artigos = $conexao-> prepare(
       "SELECT SQL_CALC_FOUND_ROWS * FROM artigos LIMIT $inicio, $postPorPagina"
   );
   
   $artigos->execute();
   $artigos = $artigos->fetchAll();
   #print_r($artigos);
if (!$artigos) {
    header('Location:index.php');
    }
    $totalArtigos = $conexao->query('SELECT FOUND_ROWS() as total');
    $totalArtigos = $totalArtigos->fetch()['total'];
    
    #echo $totalArtigos;

     $numeroPaginas = ceil($totalArtigos/$postPorPagina);
     echo $numeroPaginas;



   
  
  
  require 'index.view.php';

?>
