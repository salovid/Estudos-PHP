<?php
# if=>Se(condição a ser cumprida = verdadeira)  {então execute o laço de instruções a seguir entre chaves}; caso a condição seja falsa então salte o laço ente chaves e vá para outro comando externo ao laço.
$dataValidade = "2018-05-23" ;
$data1 = strtotime("2018-05-21");
$data2 = date('d/m/Y', $data1);

echo '<h3> Data de Validade da Resina = ' . date('d/m/Y',strtotime($dataValidade)).  '</h3>' ;

if($data1 > strtotime($dataValidade)) {
    echo '<h1 style="color: red">A Resina não deve ser liberada sem aprovação da gerência.
</h1>';
}
if($data1 < strtotime($dataValidade)) {
    echo '<h1 style="color: green">Liberar a Resina para ser utilizada</h1>';
}
echo '<h3> Porque a Data de Potlife é = ' .$data2 . '</h3>' ;
?>
                                                                                                                               