<?php
/* Escopo de variável
é o lugar de âmbito onde ela é definida.
Uma variável externa a função não pode ter acesso por ela, a menos que entre como parâmetro.
Da mesma forma não podemos asceder uma variavel que esteja dentro da função, a menos de usar o return dela.
  ---*/
# variavel externa da função :
$b=5; $exp=3;
$numb = $b**$exp-$exp;
function showK($numb) {
    $e=6;
    $numb +=$e-1;
    echo $numb .'<br/>';
}
showK($numb);

#variavel interna na função
function showN($d) {
    $numb1=2*$d**$d-11*$d+7;
    return $numb1;
}
   echo showN(4);




?>
