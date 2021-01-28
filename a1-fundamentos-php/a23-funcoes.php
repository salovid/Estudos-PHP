<?php
/* funçoes:
o que é função?
função é um bloco de código,  que nos permite modificar e utiliza-lo de forma consensada e nomeada, para programar, quantas vezes e aonde quizermos, em uma só linha de código, após a chamarmos por ela fora das chaves.

sintaxe de construção de uma função:
function nome_da_função(parametros) {
         comandos e/ou instruçoes entre chaves
}
 chamando a função:
nome_da_função(parametros);

Há mais de 1000 funções ja prontas em php, sem a necessidade de cria-las novamente.


count()..contar quantos elementos tem num array;
sort()...ordenar os elementos de um array em ordem crescente;
rsort()...ordenar os elementos de um array em ordem decrescente;
var_dump() ...informar as propriedades, conteúdo e  tipo da variavel ;.
print_r() ...informar o conteudo da variável.
/**
 * Created by PhpStorm.
 * User: vazg
 * Date: 09/01/2018
 * Time: 09:00
 */

function calculoJuros(){
    #nomeando e construindo a função
    $n = 0;
    $montante = 1000;
    $k=12;
    $taxa = 0.04;
    $juros=1;

    echo ' Numa aplicação de R$ ' . number_format($montante, 2, ',','.') . ', para uma taxa <br/> de juros de '  . ($taxa *100). '% ao mês teremos que: <br/><br/>';
    do {

        $juros = $juros*(1+$taxa);
        $capMesN = $montante*$juros;
        echo 'O capital do mês ' . ($n+1) . ' será de R$ '. number_format($capMesN, 2, ",", ".") .'<br/>';
        $n++;

    } while ($n < $k);

    echo '<hr/>' ;
    return $capMesN;

}
  # chamando a função:
calculoJuros();
?>
