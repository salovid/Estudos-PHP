<?php
/* parametros de funçoes:
o que é parametro de uma função?
é uma informação ou variavel que é informada na criação da função .
os parametros sao inseridos dentro dos colchetes, uma a um, por meio de virgulas.
na chamada da função são informados para se obter o resultado de retorno da função.

sintaxe de construção de uma função e parametros:
function nome_da_função(parametros de construção da função) {
         comandos e/ou instruçoes entre chaves
}
 chamando a função:
nome_da_função(parametros de saída);

Há mais de 1000 funções ja prontas em php, sem a necessidade de cria-las novamente.


count($varArray)..contar quantos elementos tem num array;
sort($varArray)...ordenar os elementos de um array em ordem crescente;
rsort($varArray)...ordenar os elementos de um array em ordem decrescente;
var_dump($var) ...informar as propriedades, conteúdo e  tipo da variavel ;.
print_r($var) ...informar o conteudo da variável.

 */

function calculoJuros($taxa, $k){
    #nomeando e construindo a função
    $n = 0;
    $montante = 10000;
    #$k=12;
    #$taxa = 0.04;
    $juros=1;

    echo ' Num emprestimo de R$ ' . number_format($montante, 2, ',','.') . ', para uma taxa <br/> de juros de '  . ($taxa *100). '% ao mês, terei que pagar, em devolução ao banco, a quantia de : <br/><br/>';
    do {

        $juros = $juros*(1+$taxa);
        $capMesN = $montante*$juros;
        echo 'O capital do mês ' . ($n+1) . ' será de R$ '. number_format($capMesN, 2, ",", ".") .'<br/>';
        $n++;

    } while ($n < $k);
    echo '<hr/>' ;
}
# chamando a função:
$iJuros=0.07;
$mesJuros=13;
calculoJuros($iJuros,$mesJuros);
?>
