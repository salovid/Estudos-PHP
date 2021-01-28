<?php

/* laço de repetição for

Sintaxe:
   Dentro do parenteses for temos 3 parametros separados por ponto e vigula.
for (variavel inicial, ao iniciar o laço ;  verificar a condição se verdadeira ;  operação ou incremento ou decremento ocrrendo no final de cada iteração) {
....intruçoes de laço, num bloco de código, até o termino da condição...

$var = k;
se o numero de incremento ou decremento for igual a k {
break }

se houver uma condição verdadeira, pule a proxima iteração for  e desconsidere essa {
continue }

}

---*/

$tonProduzidas_cadaMes = array(
    0=>'4.15',
    1=>'3.81' ,
    2=>'4.58',
    3=> '5.00',
    4=>'5.16',
    5=>'5.07',
    6=>'6.21',
    7=>'5.98',
    8=>'6.12',
    9=>'6.89',
    10=>'7.09',
    11=>'5.97'
);
  $soma = 0;
for($i=0, $j = count($tonProduzidas_cadaMes); $i < $j;  $i++) {
    $soma += $tonProduzidas_cadaMes[$i] ;
}
echo '<b>a produção total foi de: </b>' .   $soma . ' Tons' . '<br/>';

?>
