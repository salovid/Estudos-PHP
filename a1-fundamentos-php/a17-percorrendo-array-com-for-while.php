<?php
$relPecas = array(
    array('Fuso', 'R$ 250,00', 'Aço SAE 8620'),
    array('Polia', 'R$ 45,20', 'Aluminio 6360'),
    array('Pino de Trava', 'R$ 25,10', 'Aço SAE 4340'),
    array('chaveta', 'R$12,25', 'Aço ASTM A-37')
);

for ($i=0 ; $i < count($relPecas); $i++) {
    $k=0;
    echo  'Peça ' . ($i+1) .'&nbsp;';
    while($k<=2){
    echo '........' . '<b>' . $relPecas[$i][$k] . '</b>' ;
    $k++;
    }
    echo '<hr/>';
}
