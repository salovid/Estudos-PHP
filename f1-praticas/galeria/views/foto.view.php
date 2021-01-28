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
  <title>Portfólio de Engenharia de João Vazquez</title>
</head>
<body>
<header>
  <div class="container">
    <h1 class="titulo">
        <?php
            if(!empty($foto['titulo'])){
              echo $foto['titulo'];
            } else{
                echo $foto['imagem'];
            }
        ?>
    </h1>
  </div>                                           
</header>
<div class="container w3-padding">
   <div class="foto w3-round">
       <img src="fotos/<?php echo $foto['imagem']; ?>" alt="<?php echo $foto['titulo']; ?> ">
         <p class="texto"> <?php echo $foto['texto']; ?> </p>
     <a href="index.php" class="regressar"><i class="fa fa-long-arrow-left"></i>  Voltar</a>
   </div>
</div>

<footer>
  <p class="copyright w3-teal">Site feito por João Vazquez usando HTML5/CSS3/JS e PHP7 com MySQL</p>
</footer>
</body>
</html>