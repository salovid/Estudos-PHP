<?php

/*   Funçoes para arrays :

--- */
$mesesAno = array(
    0=>'Janeiro',
    1=>'Fevereiro' ,
    2=>'Março',
    3=>'Abril'
);
$ordemServico = [
    'nomePeca' => 'Eixo do Mancal',
    'operacao' => 'forjar'  ,
    'qtdeLote' => 1200,
    'unid' =>'pç'
];

  /*       1) - extract() ;
extrair o nome do indice de associação com o valor do array, como se fosse uma variável naquela posição.
  o indice de associacao não pode começar por numero, valendo a regra das variáveis
    ---*/

   #extract() não será válido para o array $mesAno pois tem índices numéricos, os quais não deverão ser nomes de variáveis.

extract($ordemServico);
  echo 'nome da peça:  ' . $nomePeca .'</br/>';
  echo $operacao;
  echo '<br/>';

/*       2) - array_pop() ;
retirar o ultimo elemento da variavel array $varArray(). d
  ---*/
   $ultimoMes = array_pop($mesesAno) ;
echo $ultimoMes . '<br/>';
foreach ($mesesAno as $meses) {
    echo $meses . '<br/>';
}
 echo '<hr/>' ;

   /*      3) - join(' ....-..', $varArray() ) ;
separar elementos, primeiro parametro, pode ser hifen, virgula, espaço, etc.
evita-se fazer um foreach(){ } para se conhecer o que se tem dentro da variavel array.
---*/
 echo join(',...-...', $mesesAno).'<br/>';
echo join('...<br/>. ', $ordemServico) . '<br/>';

/*      4) - print_r ($varArray() ) ;
mostra o valor da variável array.
---*/
$ordemServico1 = [
    'nomePeca' => 'Eixo do Mancal estriado',
    'operacao' => 'usinar'  ,
    'qtdeLote' => 700,
    'unid' =>'pç'
];
echo '<pre>'; echo print_r ($ordemServico1).'<br/>'; echo ' </pre>';

     

