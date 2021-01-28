


<?php
 #sessão é um procedimento para armazenar provisóriamente informações de sessão de um único usuário para as paginas de navegação. Elas duram até o usuário fechar o navegador . A seçao inicia com session-start(). As variáveis de sessão são definidas pela varável global $_SESSION . session_destroy() fecha a sessão. session-unset remove todas as variávis de sessão.
session_start();
  #criando uma sessão..
$nome_usuario='Joao';

    $_SESSION['nome'] = $nome_usuario;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>pagina inicial - registro de sessão</title>
</head>
<body>
<h1>pagina inicial</h1>
<p></p>
<a href="d02-session-paginaN.php">Ir ate a pagina N</a>
</body>
</html>