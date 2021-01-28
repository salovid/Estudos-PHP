<?php

function contar_usuarios() {
  $arquivo = 'contador.txt';
  if(file_exists($arquivo))  {
    $conta = file_get_contents($arquivo) +1;
    #substitui o valor antigo pelo novo.
    file_put_contents($arquivo, $conta);
    return $conta;
  }   else {
        file_put_contents($arquivo, 1);
        return 1;
  }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <title>Contador de Visitas</title>
</head>
<body>
<h1 class="titulo">Contador de Visitas</h1>
<div class="visitantes" >
  
    
      <p class="numero"><?php echo contar_usuarios();?> </p>
      
      <p class="texto">Visitas</p>

</div>
</body>
</html>