<?php
       /*   ciclo de repetição while:
       sintaxe:
         se usa uma variavel externa
       $var = k;
       while(enquanto a condição seja verdadeira) {
            ....instrução e comando enquanto condição ok...
       $var++;   (ou $var--;)
       }

     --- */



$tonProduzidas_cadaMes = array(
    0=>'4.15',
    1=>'3.81' ,
    2=>'4.58',

);

$i=0;
echo ' Relatório de Produção primeiro trimestre: <br/>';
while($i<=2)  {
    echo $i+1 . ' - ' . $tonProduzidas_cadaMes[$i] . " Tons" .'<br/>';

    $i++;
    echo '<hr/>';
}


?>
