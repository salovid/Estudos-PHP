<?php
session_start();

require 'funcoes.php';
comprovar_sessao();

$erros='';

if($_SERVER['REQUEST_METHOD']=='POST')  {
   #recebe dados do formulario e passa-os a minúsculas, e os filtra.
   $usuario = filter_var(strtolower($_POST['tUsuario']),FILTER_SANITIZE_STRING);
   $password=$_POST['tPassword'];
   #encripta a senha.
   $password = hash('sha512', $password);
   #echo "$usuario - $password";
    
     try{
         $conexao = new PDO('mysql:host=localhost; dbname=login_pratica', 'root', '' );
     }  catch(PDOException $e)  {
      echo "Error: " .  $e->getMessage() ;
     }
      $statement = $conexao->prepare('
          SELECT * FROM usuarios WHERE usuario = :tUsuario AND pass = :tPassword
     ');
     
     $statement->execute(array(
       ':tUsuario'=> $usuario,
       ':tPassword'=>$password
     ));
     
    $resultado = $statement->fetch();
    
   # print_r($resultado);

      if ($resultado !== false) {
          #se ok, sessao de usuário recebe o nome que está na variável usuário.
    $_SESSION['usuario'] =$usuario;
   header('Location: index.php');
          #echo 'dados corretos';
      } else {
    $erros .= '<li> Dados Incorretos </li>';
      }
}
 require 'views/login.view.php' ;
?>
