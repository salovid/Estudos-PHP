<?php

echo pathinfo('e1-trabalhando-com-arquivos/documento.txt', PATHINFO_BASENAME) ;
echo '<br/>';
echo pathinfo('e1-trabalhando-com-arquivos/documento.txt', PATHINFO_DIRNAME) ;
echo '<br/>';
echo pathinfo('e1-trabalhando-com-arquivos/documento.txt', PATHINFO_EXTENSION) ;
echo '<br/>';
echo pathinfo('e1-trabalhando-com-arquivos/documento.txt', PATHINFO_FILENAME) ;

 $resultados = glob ('*.{php,txt}', GLOB_BRACE);
echo"<pre>" ;
print_r($resultados);

echo basename('e1-trabalhando-com-arquivos/documento.txt') ;
echo '<br/>';
echo basename('e1-trabalhando-com-arquivos/documento.txt','.txt');
echo '<br/>';
echo dirname ( 'e1-trabalhando-com-arquivos/documento.txt');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>

</body>
</html>