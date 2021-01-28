<?php

$texto = '<h2>    Manual de Operações</h2><p>Objetivo:</p> < > & # ! " " @    ';

/*           1) - .....htmlspeciapchars($varString)....
converte caracters especiais em entidades html .
dando um control u, as tags e outros caracters especiais ficam com os codigos de entidadades do html.
mascara o codigo, e evita injetar codigo javascript.
---*/
echo htmlspecialchars($texto);

/*           2) - .....trim($varString)....
elimina espaços em branco no incio e no fim de uma cadeia de textos da variavel string
desocupando espaço em bits.
---*/
echo trim($texto);
echo '<br/><br/>';

/*           3) -  .....strlen($varString)....
calcular o tamanho de uma cadeia de texto de um variavel string.
---*/
echo strlen($texto);
echo '<br/><br/>';
/*         4) -   .....strlen($varString)....
parametro 1 informa a quantidade de caracteres em contagem desde zero, para cortar texto do lado esquerdo para trás, e parameto 2 e informa quantos caracteres ficam para serem mostrados que se seguem do lado direito, a partir dos quais haverá corte.
se o primeiro parametro é zero, então não sera cortado nada do lado esquerdo para trás.
---*/
echo $textoNovo = substr($texto, 10, 18);

/*         5) -  .....strltoupper($varString)....
converte os caracteres da cadeia de texto da variável string em maiúsculas.
---*/
echo strtoupper($texto);
echo '<br/><br/>';

/*         6) -  .....strltolower($varString)....
converte os caracteres da cadeia de texto da variável string em minúsculas.
---*/
echo strtolower($texto);
echo '<br/><br/>';

/*          7) -   .....strpos($varString)....
informa a posição de um caractere que é informado pelo segundo parametro entre parentesis.
---*/
echo $posicaoLetra = strpos($texto, 'M');
echo '<br/><br/>';

/*          8) -   .....printf($varString)....
veio da linguagem c. imprime formatando.
%s...mostra uma string     %f...float...numero real  %.2f...mostra com 2 casa decimais.
%d..valor deimal (positivo ou negativo) , sendo que %u sem sinal (mostra apenas positivo)
---*/
$peca = 'Eixo usinado';
$precoPeca= 123.58;
printf("O %s tem o preço de R$ %.2f", $peca, $precoPeca);

?>
