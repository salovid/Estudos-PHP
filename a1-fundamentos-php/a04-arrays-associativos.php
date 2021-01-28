  <?php
  $brocasMont = array(
      'codigo01' =>'puncao 9/16',
      'codigo02' =>'puncao 1/2',
      'codigo03'=>  'puncao 17/32'
  );

  $ferramentasMont = [
      0 => 'Rasquete',
      1=> 'Calibrador PNP',
      2 =>'Gabarito 037',
      3 =>'Suta'
  ] ;

  $ordemServico = [
      'nomePeca' => 'Eixo do Mancal',
      'operacao' => 'forjar'  ,
      'qtdeLote' => 1200,
      'unid' =>'pç'
  ];             //array associativo
  echo 'Requisição de Ferramentas: ' .'<br>';
  echo $brocasMont['codigo03'] . '<br/>';
  echo $ferramentasMont[0] . '<br/>';
  echo $ferramentasMont[1] . '<br/>';
  echo $ferramentasMont[3] . '<br/>' .'<hr/>';
  echo 'Ordem de Serviço 345:  '. $ordemServico ['nomePeca'] .'<br/>';
  echo 'Quantidade a Fabricar:  '. $ordemServico['qtdeLote'];
  echo $ordemServico ['unid'] .'<br/>';
  ?>

