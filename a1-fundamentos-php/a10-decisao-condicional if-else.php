<?php
# if=>Se(condição a ser cumprida = verdadeira)  {então execute o laço de instruções a seguir entre chaves}; caso a condição seja falsa então salte o laço ente chaves e vá para else ou outro comando externo ao laço.
$durezaAco_RC = 53;
$calibrado ='sim';
$regimeUso='especial';
echo '<h3> 1 - Dureza da Ferramenta = ' . $durezaAco_RC . ' RC</h3>' ;
echo '<h3> 2 - Durometro Calibrado? ' . $calibrado.'</h3>' ;
echo '<h3>3 - Regime de Uso da Ferramenta? ' . $regimeUso.'</h3>' ;
if($durezaAco_RC >= 54 && $durezaAco_RC< 58 &&$calibrado=='sim' || ($durezaAco_RC==53 && $regimeUso=='especial' &&  $calibrado =='sim')) {
    echo '<h1 style="color: green">Ferramenta aprovada para montagem</h1>';
}
else{
    echo '<h1 style="color: red">Ferramenta rejeitada para montagem</h1>';   }
?>
