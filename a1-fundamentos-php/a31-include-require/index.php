<?php
  /* numa página fica separado o que é programa e logica via código php, e o que será a visualização em texto e midia via html-css-js.
    Os programas incluiem variáveis, condicionais, laços e fluxo de iterações que ficam separados dos outros arquivos da parte visual e midia. Os programas interagem com arquivos textos e de midia tipo html-css via comando include ou require.
  No comando Include 'o arquivo_adicionado.php' é inserido ao arquivo principal; se houver alguma falha na busca dele, é lançado um warning, mas o programa continua.
  no camando require, é feito da mesma forma, mas se houver alguma falha é lançado um warning e em seguida um fatal error e o programa para imediatamente.
  Em suma, include é condolente, e require é enérgico.
  ---*/
  function calculo($n1,$n2)  {
      $calc = (1 + 1/($n2+0.001))**$n1;
      return $calc;
  }
 echo "ola manos";
  include 'vista.php';

?>
