<?php
    $relPecas = array(
        array('Fuso', 'R$ 250,00', 'Aço SAE 8620'),
        array('Polia', 'R$ 45,20', 'Aluminio 6360'),
        array('Pino de Trava', 'R$ 25,10', 'Aço SAE 4340'),
        array('chaveta', 'R$12,25', 'Aço ASTM A-37')
    );
    echo 'Relaçao de Peças:' .'<br/>' ;
    echo $relPecas[0][0] ;
    echo '..........Custo: ' . $relPecas[0][1];
    echo '......material  '.$relPecas[0][2] .'<br/>';
    echo $relPecas[3][0] ;
    echo '......Custo:   ' . $relPecas[3][1];
    echo '........material  '.$relPecas[3][2] .'<br/>';
    echo count($relPecas).'<br/>' ;

       echo 'A ultima peça da relação de peças é a:  ' . $relPecas[count($relPecas)-1][0];

?>
