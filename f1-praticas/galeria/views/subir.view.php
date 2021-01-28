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
<body>
<header>
  <div class="container">
    <h1 class="titulo">Subir Foto</h1>
  </div>
</header>
<div class="container">
  <form class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <label for="cfoto">Selecionar sua foto</label>
      <input type="file" id="cfoto" name="tfoto"/>
    
      <label for="ctitulo">Titulo da Foto</label>
      <input type="text" id="ctitulo" name="ttitulo"/>
    
      <label for="ctexto">descrição</label>
      <textarea name="ttexto" id="ctexto" placeholder ="Digite em titulo da foto"></textarea>
      
    <?php if (isset($error)): ?>
        <p class="error" > <?php echo $error; ?> </p>
    <?php endif ?>
    
      <input type="submit" class="submit" value="Subir Foto"/>
    
  </form>
</div>

<footer>
  <p class="copyright">Criado por João Vazquez utilizando a tecnologia HTML5/CSS3/JS e PHP7 com MySQL</p>
</footer>
</body>
</html>