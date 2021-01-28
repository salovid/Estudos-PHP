<?php

 session_start();
 if ($_SESSION) {
   $nomeN = $_SESSION['nome'];
   echo "<h1> Bem vindo, $nomeN </h1>" ;
   print_r($_SESSION);
 }   else {
   echo "Não foi iniciada sessão" ;
 }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Pagina N</title>
</head>
<body>
<!-- $_SESSION[' ']; é uma variável global -->

<a href="d03-session-fechar.php">Fechar Sessao</a>
</body>
</html>