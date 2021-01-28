
  <html>
<body>


<?php

  if(!$_POST) {
    header('Location: http://localhost:/curso-php/b1-formularios/b02-formulario-envia-POST.php');
   }


  if (isset($_POST["tNome"])) {


      echo '<h1>bem vindo '.$_POST["tNome"].'</h1>' ;
  }
     else{
      echo "preencher nome" ;
     }
     echo '<br/>';

    echo '<pre>';echo print_r($_POST).'<br/>'; echo '</pre>';
    ?>


</body>
</html>

