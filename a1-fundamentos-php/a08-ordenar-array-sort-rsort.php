<?php
# comando foreach($varArray as $var) {} é aplicado para percorrer o array, onde por cada índice que encontrar do início até o fim das variaveis intenas do array executará um comando  entre as chaves como outra variavel no índice a índice até o final.
# comando sort ($varArray); ordenara as variáveis intenas da variável array, crescente.
// comando rsort ($varArray); ordenara as variáveis intenas da variável array, decrescente (reverse-sort).
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

$tonProduzidas_cadaMes = array(
    0=>'4.15',
    1=>'3.81' ,
    2=>'4.58',
    3=> '5.00',
    4=>'5.16',
    5=>'5.07',
    6=>'6.21',
    7=>'5.98',
    8=>'6.12',
    9=>'6.89',
    10=>'7.09',
    11=>'5.97'
);
sort($mesesAno);
rsort($tonProduzidas_cadaMes);
?>

<!DOCTYPE html/>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Exemplo de como usar foreach</title>
</head>
<body>
<h1>Exemplo do uso de sort e rsort em PHP</h1>

<ul>
    <li style="list-style-type:none;">
        <?php $titMes='Meses no Ano em ordem alfabética: ';echo '<b>'.count($mesesAno).'&nbsp;&nbsp;'.$titMes.'</b>'; ?> </li>
    <?php
    foreach($mesesAno as $mes)   {
        echo '<li style="list-style-type:square">' . $mes . '</li>';
    }
    ?>
</ul>
<ul>
<li style="list-style-type:none;">
    <?php $titProd='Produções mensais ordenadas em qtde de Tons no ano: ';echo '<b>'.count($mesesAno).'&nbsp;&nbsp;'.$titProd.'</b>'; ?> </li>
<?php
foreach($tonProduzidas_cadaMes as $mesTon)   {
    echo '<li>' . $mesTon . '</li>';
}
?>
</ul>
</body>
</html>
