<?php
session_start();

if (isset($_SESSION['usuario'])) {
 require 'views/conteudo.view.php';
}  else {
 header('Location: login.php');
}
?>
