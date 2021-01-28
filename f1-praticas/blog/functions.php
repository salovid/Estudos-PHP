<?php

    function conexao($bd_config) {
        try {
            $tabela= $bd_config['banco_dados'];
            $conexao = new PDO("mysql:host=localhost; dbname=$tabela;charset=utf8", $bd_config['usuario'], $bd_config['pass']);
            return $conexao;
        
        } catch(PDOException $e) {
            return false;
        }
    }
   
   function limparDados($dados) {
        $dados = trim($dados);
        $dados = stripslashes($dados);
        $dados = htmlspecialchars($dados);
        return $dados;
   }

   function pagina_atual() {
        return isset($_GET['p']) ? (int)$_GET['p'] : 1;
        
   }
   
   function obter_post($post_por_pagina,  $conexao) {
          $inicio =(pagina_atual() > 1 ) ? pagina_atual() * $post_por_pagina - $post_por_pagina : 0;
          #vai precisar saber a qtde de posts..
       $sentenca = $conexao->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM artigos LIMIT $inicio, $post_por_pagina ");
       $sentenca->execute();
       return $sentenca->fetchAll();
   }
 
   #funço para calcular a quantidade de paginas
 function numero_paginas($post_por_pagina, $conexao){
        $total_post = $conexao->prepare('SELECT FOUND_ROWS() as total');
        $total_post->execute();
        $total_post = $total_post->fetch()['total'];
        $numero_paginas = ceil($total_post / $post_por_pagina);
        return $numero_paginas;
        
        
 }
   
   //função para se ter o inteiro limpo de um id do banco de dados.
  function id_artigo($id){   #id_artigo() função que esta em function.php
      return (int)limparDados($id);
  }
  
   //função para buscar uma linha id com os registros no banco de dados
  function obter_post_por_id($conexao, $id)   {
      $resultado = $conexao->query("SELECT * FROM artigos WHERE id = $id LIMIT  1");
      $resultado = $resultado->fetchAll();
      return ($resultado) ? $resultado : false;
      #if(isset($resultado)) { return $resultado; } return false ;
      
  }
        
    //funçao para se ter a data mais legível.
      function data($data)
      {
          $timestamp = strtotime($data);
          $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
          $dia = date('d', $timestamp);
          $mes = date('m', $timestamp) - 1;#a contagem do índice começa em zero;
          $year = date('Y', $timestamp);
    
          $data = "$dia de " . $meses[$mes] . " de $year";
          return $data;
      }
          
   Function comprovarSessao() {
      if(!isset($_SESSION['admin'])){
          header('Location: ' . ROTA);
          
      }
   }
      

?>
