<?php


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Paginação</title>
  <link rel="stylesheet" href="estilos.css" />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
<div class="container">
  <h1>Artigos</h1>
  <section class="artigos">
  <ul>
      <?php foreach($artigos as $artigo): ?>
           <li>  <?php echo $artigo['id'] . '. ' . $artigo['titulo_artigo'];  ?> </li>
    <?php endforeach; ?>
     <!--a pagina que deve executar no navegador é a index.php-->
    
  </ul>
  </section>
  <section class="paginacao">
    <ul>
      <?php if ($pagina == 1 ): ?>
          <li class="disabled">&laquo;</li>
      <?php else: ?>
      <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
      <?php endif ?>
      
         <?php
           for($i=1; $i <= $numeroPaginas ; $i++){
                 if ($pagina == $i) {
                   echo  "<li class='active'><a href = '?pagina=$i'>$i</a></li> " ;
                 }else {
                   echo "<li><a href='?pagina=$i'>$i</a></li> ";
                 }
           }
         ?>
           <?php if ($pagina == $numeroPaginas ): ?>
      <li class="disabled">&raquo;</li>
        <?php else: ?>
      <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
        <?php endif ?>
         
        
      
   <!-- <li class="disabled">&laquo;</li>
    <li class="active"><a href = "#">1</a></li>
    <li><a href = "#">2</a></li>
    <li><a href = "#">3</a></li>
    <li><a href = "#">4</a></li>
    <li><a href = "#">&raquo;</a></li>    -->
    </ul>
  </section>
</div>

</body>
</html>