<?php
    /* função var_dump()
    mostra informações sobre a variável.
    usa-se pre para melhorar a visualização, ou ctrl+u.
    ---*/
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
    var_dump(ICM);
echo '<pre>';
var_dump($tonProduzidas_cadaMes);
echo'</pre>';
var_dump($k);
    var_dump($fT);

    var_dump($boL);
    var_dump($bOL);
    var_dump($stA) ;

    

echo '<pre>';
    var_dump($relPecas);
    echo'</pre>';

    
?>
