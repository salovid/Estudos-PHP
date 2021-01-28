<?php
    /* Função die
     para a execução da pagina na ordem em que for encontrada, permitindo analisar o codigo até aquele ponto dela. 
    */
    echo 'mostrando a função die ' .'<br/>';
$tonProduzidas_cadaMes = array(
    'jan'=>4.15,
    'fev'=>3.81 ,
    'mar'=>'4.58',  );
echo '<pre>';
var_dump($tonProduzidas_cadaMes);
echo '</pre>' ;
echo '<br/> a partir desta linha o programa se interrompe devido a função die';
    die();

    ?>
    <!DOCTYPE html>
  <html lang = "pt-br">
<head>
    <title>exemplo uso da função die</title>
  <meta charset = "UTF-8" >
</head>
<body>
<h2> mostrando a função die</h2>
</body>
</html>




