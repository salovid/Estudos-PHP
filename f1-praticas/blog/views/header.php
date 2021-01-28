<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="<?php echo ROTA ?>css/estilos.css" />
  <title>Blog de João Vazquez</title>
</head>
<body>
<header>
  <div class="container">
    <div class="logo esquerda">
      <p><a href="<?php echo ROTA;?>"> Blog do Joao</a></p>
    </div>
    <div class="direita">
      <form name="busca" class="buscar" action="<?php echo ROTA; ?>/buscar.php"  method="get" >
        <input type="text" name="busca"  placeholder="procurar">
        <button type="submit" class="icone fa fa-search"></button>
      </form>
      <nav class="menu">
        <ul>
          <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#">Contato <i class="icone fa fa-envelope"></i></a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>