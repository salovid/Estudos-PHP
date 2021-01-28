<?php
/* comando return de uma função:
o que é return de uma função?
é um comando dentro das chaves, para retornar os valores da função criada.
é a ultima intrução, a partir dela so pode haver a chave de fechamento.
return, evita que os dados sejam mostrados ;

sintaxe de construção de uma função com  parametros e return:
function nome_da_função(parametros de construção da função) {
         comandos e/ou instruçoes entre chaves
return  resultado unico de calculo ao cria a funçao;
}
 mostrando a função:
echo nome_da_função(com os parametros de saída);
   */
function calculoJuros($mon,$ijuros, $k){
    #nomeando e construindo uma função
    $n = 0;     $ju=1;
    do {
        $ju = $ju*(1+$ijuros);
        $capMesN = $mon*$ju;
        $n++;
        } while ($n < $k);
    return $capMesN;

}
$iJuros=0.06; $m=12; $mon=10000;
echo ' Num emprestimo de R$ ' . number_format($mon, 2, ',','.') . ', para uma taxa <br/> de juros de '  . ($iJuros *100). '% ao mês, terei que pagar, em devolução ao banco, a quantia de : <br/><br/>';

    for ($i=1;$i<=$m; $i++) {
    $tot =calculoJuros($mon,$iJuros,$i); # chamando a função:
    echo 'O capital do mês ' . $i . ' será de R$ '. number_format($tot, 2, ",", ".") .'<br/>';
}
echo'<hr/>';
   function projeto($nomePeca)  {
    return ' Para produzir...........' . $nomePeca;

}
# chama a função fornece parametros e mostra o resultado de returno na tela via comando echo.
echo projeto('chumbador') . '<br/>';
    echo projeto('base da coluna') . '<br/>';
    echo projeto('chapa de ligação'). '<br/>';

?>
