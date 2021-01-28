<?php
/*
    break...corta a sequencia em um laço
    continue...pula a sequencia em um laço
 */
     $listaMaterial = array (
         '1 - chapa de aço 2mmx2x1',  '2 - chapa de aço 3mmx2x1.2', '3 - chapa de aluminio 1,5mmx2x1', '4 - barra de aço 1in', ' 5 - chapa de aço FF 0.8mmx3x1,2', '6 - chapa de aço 10mmx6000x1500'
     );
        foreach($listaMaterial as $material) {
            if ($material == '3 - chapa de aluminio 1,5mmx2x1') {
                continue;
            }
            if ($material == ' 5 - chapa de aço FF 0.8mmx3x1,2') {
                continue;
            }
            echo $material . '<br/>';
        }
        echo '<hr/>';
foreach($listaMaterial as $material) {
    echo $material . '<br/>';
    if ($material == '3 - chapa de aluminio 1,5mmx2x1') {
        break;
    }


}
?>
