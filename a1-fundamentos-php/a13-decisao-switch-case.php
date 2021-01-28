<?php

/*   Sintaxe:

switch() {
case '  ' :
instruções......
break;
default:
....instruções...
break;
}
 ---*/

        echo ' exemplo do uso de switch - case' .'<br/>';
        $materiais = array ('silicone', 'parafuso M10x30', 'chapa preta 2mm', 'eletrodo 3mm');
        foreach ($materiais as $mat)   {
            echo $mat . '<br/>';
        }

        switch($materiais[1]) {
             case 'parafuso M10x30':
             echo 'verificar para o '. $materiais[1] . ' se tem a porca e arruela M10';
             break;
            case 'silicone':
                echo 'verificar para o '. $materiais[0] . ' se é incolor';
                break;
            default:
                echo ' não encontrei os materiais na lista';
                break;
        }


