<?php session_start();

if(isset($_SESSION['usuario'])) {
    #echo 'bem vindo  '.$_SESSION['usuario'];
    #se sessão estiver seteada vai para o conteudo, caso opos to vai ao registro
 header        ('Location: conteudo.php');
  
} else {
   header('Location: registro.php');
}


?>
