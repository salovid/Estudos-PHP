
  <html>
<body>


<?php

  if(!$_GET) {
    header('Location: http://localhost:/curso-php/b1-formularios/b03-formulario-envia-GET.php');
  }
       $nome=$_GET['tNome'];
echo htmlspecialchars($nome);
        $senha=$_GET['tSenha'];
        echo $nome;
        echo $senha;
print_r($_GET);
  if (isset($_GET["tNome"])) {


      echo '<h1>bem vindo '.$_GET["tNome"].'</h1>' ;
  }
     else{
      echo "preencher nome" ;
     }
     echo '<br/>';

    echo '<pre>';echo print_r($_GET).'<br/>'; echo '</pre>';
?>


</body>
</html>

