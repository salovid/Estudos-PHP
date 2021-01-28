<?php
session_start();

 if (isset($_SESSION['usuario'])) {
   header ('Location: index.php');
  }

  if ($_SERVER['REQUEST_METHOD'] =='POST') {
       $usuario = filter_var(strtolower( $_POST['tUsuario']), FILTER_SANITIZE_STRING);
       $password = $_POST['tPassword'];
       $password2 = $_POST['tPassword2'];
       
       #echo "$usuario . $password . $password2" ;
       
       $erros = '';
       
       if(empty($usuario) or  empty($password) or  empty($password2) ) {
           $erros .= '<li> Favor inserir todos os dados corretamente </li>';
       }else {
           try{
               $conexao = new PDO('mysql:host=localhost;dbname=login_pratica', 'root', '');
           
           }catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
           }
           
           $statement = $conexao->prepare('SELECT * FROM usuarios WHERE usuario = :tUsuario LIMIT 1');
            $statement->execute(array(':tUsuario'=>$usuario));
            $resultado = $statement->fetch();
            
            #print_r($resultado);
            #var_dump($resultado);
          
             if ($resultado !=false) {
                 $erros .= '<li> O nome de usuário já existe </li>' ;
                 
             }
            
             $password = hash('sha512', $password);
             $password2 = hash('sha512', $password2);
           #echo "$usuario . $password . $password2" ;
           
           if($password != $password2) {
               $erros .= '<li> As contra-senhas não são iguais </li>' ;
           }
          
           
       }
 
      //não houve erros, então insertar usuario novo.
      
      if ($erros==''){
           $statement = $conexao->prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');
           $statement -> execute(array(
               ':usuario'=>$usuario,
               ':pass'=>$password
               
           ));
           header ('Location: login.php');
          
      }
      
      
       
  }
  
 require 'views/registro.view.php' ;
?>
