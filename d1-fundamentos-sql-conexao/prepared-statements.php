<?php
     #$id=$_GET['id'];
 try {
     $conexao = new PDO('mysql:host=localhost;dbname=livros_arquivo', 'root', '');
    
     // Prepared Statements
     $statement = $conexao->prepare('select * from livros_php_mysql');
        $statement ->execute();
         # array(':id' =>$id)
          #);
        
       $resultados = $statement->fetchAll();
      foreach ($resultados as $mostrar) {
           echo $mostrar['nome_autor'].'<br/>';
      }
    
 }
     catch(PDOException $e) {
   echo "Error: " . $e->getMessage();
     }
?>


