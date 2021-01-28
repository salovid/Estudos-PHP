<?php

session_start();

require 'admin/config.php';
require 'functions.php';



if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = limparDados($_POST['usuario']);
  $password = limparDados($_POST['password']);


if($usuario == $blog_admin['usuario'] &&  $password == $blog_admin['password'])  {
    $_SESSION['admin'] = $blog_admin['usuario'];
    header('Location:'. ROTA . 'admin');
    
}
}

require 'views/login.view.php';

?>
