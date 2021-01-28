<?php
    /*mostra o valor da variável
    mas sem dizer qual é o tipo dela.
    mais facill de ler a informação da variável que var_dump, porém mais incompleta.
    em variavel booleana false não mostra nada  e em variavel booleana true mostra o algarismo 1
    */
define('ICM', 0.18);
$k=2;
$fT=0.13;
#$boL=false;
$bOL='true';
$boL=($fT<$k);

if($boL) {
    $stA = 'Nome: '  ;
}
$tonProduzidas_cadaMes = array(
    'jan'=>4.15,
    'fev'=>3.81 ,
    'mar'=>'4.58',  );

$relPecas = array(
    array('Fuso', 'R$ 250,00', 'Aço SAE 8620'),
    array('Polia', 'R$ 45,20', 'Aluminio 6360'),
    array('Pino de Trava', 'R$ 25,10', 'Aço SAE 4340'),
    array('chaveta', 'R$12,25', 'Aço ASTM A-37')
);
print_r(ICM);
echo '<pre>';
print_r($tonProduzidas_cadaMes);
echo'</pre>';
print_r($k)  ;
print_r($fT);


print_r($bOL);
print_r($stA) ;



echo '<pre>';
print_r($relPecas);
echo'</pre>';

echo '<br/>'.print_r($boL);
?>
