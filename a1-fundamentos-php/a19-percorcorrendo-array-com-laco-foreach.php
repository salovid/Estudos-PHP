<?php
        
$especPeca1 = array(
  'nome da peça'=>'Fuso', 'custo'=>'R$ 250,00', 'material'=> 'Aço SAE 8620'
);

    echo '<ul>';
    foreach($especPeca1 as $campo => $registro) {
        echo '<li>' . $campo . ' : ' . $registro . '</li>';
    }
     echo '</ul>';
