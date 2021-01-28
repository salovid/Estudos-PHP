   <?php
$qtde = 527;
$custoUnit = 53;
$custoFixo = 15347;
$varOper = array(
    'qtde' => "$qtde"      ,
    'custoUnit' => "$custoUnit",
    'ICM' => 0.18,
    'IPI'=>0.15,
    'custoFixo' =>"$custoFixo"
);

$vendasJan = 15000;
$vendasFev = 10000;
$vendasMar = 12000;
$devVendas = 2000;

$totMat = 61;
$matPorUnid = 7;

# Adiçao:
$vendas1Trim = $vendasJan + $vendasFev + $vendasMar;
echo 'vendas primeiro trimeste:     ' .$vendas1Trim. '<br/>';

# Subtração:
echo ' vendas liquidas primeiro trimestre:  ' . ($vendas1Trim - $devVendas). '<br/>';

# multiplicação:
echo ' custo variável :  ' . ($varOper['qtde']*$varOper['custoUnit']) . '<br/>';

#divisão:
echo ' venda produtos antes do IPI= venda total nota/(1+IPI) =  35000 / (1+IPI) = ' . number_format(($vendas1Trim-$devVendas)/(1+$varOper['IPI']),2, ",",".") . '<br/>' ;

echo ' venda liquida produtos antes ICMS= venda produtos * (1-ICM) =  (35000 / (1+IPI))*(1-ICM) = ' . number_format(( ( ($vendas1Trim-$devVendas)/(1+$varOper['IPI']) )*(1-$varOper['ICM']) ), 2, ",", ".") . '<br/>' ;

$vendaLiq = ( ( ($vendas1Trim-$devVendas)/(1+$varOper['IPI']) )*(1-$varOper['ICM']) );
$valorTotProds =  ($vendas1Trim-$devVendas)/(1+$varOper['IPI']) ;
$valorIPI =$valorTotProds * $varOper['IPI'];
#módulo
echo ' qtde de sobra de matéria prima :  = 61kg % 7 kg/produto =   ' . ($totMat%$matPorUnid) . '  kg = resto da divisão da quantidade de material pela quantidade dele  pelos (8) produtos.' . '</br>';

#atribuição tranferência

echo ' base de cálculo ICM na nota = venda liquida antes do ICM / (1 - ICM) =R$ 24956 / (1-0.18) =  ' . number_format( $vendaLiq/(1-$varOper['ICM']), 2, ",",".");


#somando antes e transferindo

$divida =10000;
echo '<br/>'. 'dívida = dívida + juros =  10000 + 5% x 10000 =...
    $divida += 0.05*$divida ....' .( $divida +=0.05*$divida ) . '<br/>';


#subraindo antes e transferindo

$dinheiroRealBolso =10000;
echo  'perda pela inflação = dinheiro no bolso  = dinheiro no bolso  - perda pela inflação =  10000 - 3% x 10000 =...
    $dinheiroRealBolso -= 0.03*$dinheiroRealBolso ....' .( $dinheiroRealBolso -=0.03*$dinheiroRealBolso ) . '<br/>';


#multiplicando antes e transferindo

$jurosCompostos =(1+0.05);
echo 'juros compostos = (1+juros)  * (1+ juros) =  1.05 x (1.05) =...
    $jurosCompostos *= $jurosCompostos ....' . ( $jurosCompostos *=$jurosCompostos ) . '<br/>';


#dividindo antes e transferindo

$extin =0.2;
echo ' grau de amortização de um sistema = amortizaçao/ (amortização + 1) = ' . $extin /= ($extin+1) .'<br/>';

   ?>
<!DOCTYPE html/>
  <html lang = "pt-br" >
         <head>
             <meta charset = 'UTF-8'/>

             <title>Operadores</title>
         </head>
<body>
<h1>Exemplos operadores</h1>
</body>
</html>
