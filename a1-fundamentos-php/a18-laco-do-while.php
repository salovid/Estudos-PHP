
<?php
/* laço do-while

é necessario uma variavel de refrência antes do laço.
o laço é feito por do.
while no final de cada laço, permite a iteração enquanto a condição  for verdadeira.

$var=1;
do  {
...instrução...
$var ++ ou $var--;
}
while (condição verdadeira)

---*/

$n = 0;
$montante = 1000;
$k=12;
$taxa = 0.04;
 $juros=1;
       echo ' Numa aplicação de R$ ' . number_format($montante, 2, ',','.') . ', para uma taxa <br/> de juros de '  . ($taxa *100). '% ao mês teremos que: <br/><br/>';
do {

     $juros = $juros*(1+$taxa);
    echo 'O capital do mês ' . ($n+1) . ' será de R$ '. number_format($montante*$juros, 2, ",", ".") .'<br/>';
    $n++;

} while ($n < $k);
echo '<hr/>'
?>

