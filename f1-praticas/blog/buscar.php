<?php
require 'admin/config.php';

require 'functions.php';

$conexao = conexao($bd_config);
if(!$conexao){
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busca'])) {
  $busca = limparDados($_GET['busca']);
  
  $statement = $conexao->prepare(
    'SELECT * FROM artigos WHERE titulo LIKE :busca or texto LIKE :busca'
  );
  $statement->execute(array(':busca' => "%$busca%"));
  $resultados = $statement->fetchAll();

  if (empty($resultados))  {
  $titulo = 'Não se encontraram os artigos com a procura: ' . $busca;
  echo $titulo;
  } else {
    $titulo = 'Resultados da busca: ' . $busca;
    echo $titulo;
  }
} else {
     header('Location: ' . ROTA . '/index.php');
}

require 'views/buscar.view.php';


?>
