<?php
    $mesesAno = array(
         0=>'Janeiro',
         1=>'Fevereiro' ,
         2=>'Março',
         3=> 'Abril',
         4=>'Maio',
         5=>'Junho',
         6=>'Julho',
         7=>'Agosto',
         8=>'Setembro',
         9=>'Outubro',
         10=>'Novembro',
         11=>'Dezembro'
    );
    echo 'mes  ' .count($mesesAno)  .' é:' . '<br/>';
    echo $ultimoMes=$mesesAno[count($mesesAno) -1] . ';  o último mes do ano. ';
?>