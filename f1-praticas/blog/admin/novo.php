<?php

  session_start();
  require '../admin/config.php';
  require '../functions.php';
  
  comprovarSessao();
  
  $conexao = conexao($bd_config);
  if(!$conexao){
     header ('Location: ../error.php');
  }
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     # $titulo = limparDados($_POST['titulo']);
     # $extrato = limparDados($_POST['extrato']);
      $titulo = $_POST['titulo'];
      $extrato = $_POST['extrato'];
      $texto = $_POST['texto'];
      $thumb =$_FILES['thumb']['tmp_name'];
      
      $arquivo_subido = '../' . $blog_config['pasta_imagens'] . $_FILES['thumb']['name'];
      move_uploaded_file($thumb,$arquivo_subido);
      
      $statement = $conexao->prepare(
        'INSERT INTO artigos (id, titulo, extrato, texto, thumb)
         VALUES (null, :titulo, :extrato, :texto, :thumb)
     ' );
      
      $statement->execute(array(
          ':titulo'=> $titulo,
          ':extrato'=>$extrato,
          ':texto'=>$texto,
          ':thumb'=>$_FILES['thumb']['name']
      ));
      
      header('Location:' . ROTA . 'admin') ;
    
  }
  
  require '../views/novo.view.php';

?>
