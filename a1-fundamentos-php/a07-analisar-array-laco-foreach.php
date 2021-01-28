 <?php
 # comando foreach($varArray as $var) {} é aplicado para percorrer o array, onde para cada índice que encontrar executará um comando  entre as chaves como outra variavel índice a índice até o final.

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
       <h1>Exemplo do uso de foreach em PHP</h1>

     <ul>
              <li style="list-style-type:none;">
              <?php $titMes='Meses no Ano: ';echo '<b>'.count($mesesAno).'&nbsp;&nbsp;'.$titMes.'</b>'; ?> </li>
              <?php
        foreach($mesesAno as $mes)   {
          echo '<li style="list-style-type:square">' . $mes . '</li>';
        }
        ?>
    </ul>
 </body>
 </html>
