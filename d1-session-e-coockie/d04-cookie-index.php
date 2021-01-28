

<?php
  /*  cookie é um aquivo (bolinho) que o servidor incorpora no computador do usuário, em que cada vez que ele solicita uma pagina ao srevidor ele envia junto uma cookie.
   a cookie é usado para idenificar um usuário.
  cookie é criado pela função setcookie(name, value, expire, path, domain, secure, httponly);
  apenas o name é necessário o resto é opcional.
  setcookie() deve vir ates da tag <html> . só pode guardar até 4Mb. podem ser alteradas por extensões e plugins nos navegadores.
---*/
 setcookie('font-size','50px', time()+60*60*24*30, 'd1-session-e-coockie'); #cookie criada                                                                                 /

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
<h1>cookie seteada</h1>
</body>
</html>