<?php
/*     Operador ternário - if-curto
      Sintaxe:
   $var(condicao)  ?.... instrução...se condição ok ...  : .....instrução ...se condição é falsa... ;

 isset($var) retorna 1 se $var esta definida com valor.
 ---*/
 $qtdePecas = 350;
$codMaterial = (isset($codMaterial))    ? $codMaterial  : 'Favor informar o codigo do material';
echo 'código do material =  ' . $codMaterial .'<br/>';
 echo ($qtdePecas < 270) ? 'usar material de estoque'  : 'requisitar compra de material ' ;

?>
