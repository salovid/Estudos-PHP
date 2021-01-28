<?php


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="css/estilos.css" />
  <title>Portfólio de Engenharia</title>
</head>
<body w3-container>
<header>
<div class="container">
  <h1 class="titulo w3-mobile w3-teal">Portfólio de João Vazquez</h1>
</div>
</header>
<section class="fotos " >
    <div class="container w3-padding" >
        <?php foreach($fotos as $foto ):?>
          <div class="thumb w3-round">
            <a href="foto.php?id=<?php echo $foto['id']; ?>">
              <img src="fotos/<?php echo $foto['imagem'] ?> " alt="<?php echo $foto['titulo']; ?>"/>
            </a>
            
          </div>
          
        
        <?php endforeach; ?>
      
      <div class="pagination">
        <?php if ($pagina_atual > 1):  ?>
           <a href="index.php?p=<?php echo $pagina_atual -1; ?>" class="esquerda"><i class="fa fa-long-arrow-left"> </i>  Página Anterior</a>
         <?php endif ?>
    
          <?php if ($total_paginas != $pagina_atual):  ?>
            <a href="index.php?p=<?php echo $pagina_atual +1; ?>" class="direita"> Página Seguinte  <i class="fa fa-long-arrow-right"></i></a>
          <?php endif ?>
        
      <!--  <a href="#" class="esquerda"><i class="fa fa-long-arrow-left"> </i>  Página Anterior</a>
        <a href="#" class="direita"> Página Seguinte  <i class="fa fa-long-arrow-right"></i></a>  -->
      </div>
     
    </div>
</section>
<footer>
  <p class="copyright">Site feito por João Vazquez utilizando HTML5/CSS3/JS e PHP7 com MySQL</p>
</footer>
</body>
</html>