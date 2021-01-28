<?php
   #funçao para conectar a base de dados.
function conexao($tabela, $usuario, $pass) {
  
  try {
    $conexao = new PDO("mysql:host=localhost; dbname=$tabela;charset=utf8" , $usuario, $pass);
 
    return $conexao;
  } catch(PDOException $e) {
      return false;
  }
  
  
}

?>
