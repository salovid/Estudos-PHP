<?php
#criando array associativo:
#medidas de um triangulo
#lei dos cossenos:c2 = a2 + b2 -2abcos(c)
$ang=deg2rad(75) ;
 $med['medida base']=12.51;
 $med['medida lado 2']=28.49;
 $med['medida angulo em radianos']=$ang;
 #ângulo 75 graus.

 /* * FUNÇOES MATEMÁTICAS EM PHP:
    1 ) - *round()
        arredond numero de uma variável...se o mesmo é < 5 então é arredondado para          menos. se >5 arredonda para mais.
        tem dois parametros, o primeiro é a variavel a ser arrendoda ou numero puro, e s segundo a quantidade de decimais apos a virgula.
  ---*/
        echo round ($med['medida lado 2'], 1);
        echo '<br/>';


/** 2) - rand() gera um número inteiro aleatório entre dois numeros min e max como argumento.
 ---*/
#jexemplo: jogar  um dado 60 vezes; mostrar que o dobro da media dos resultados obtidos deve ser a soma de lados que é 6, com desvio máximo de 1.
$a=0; $s=0;
for ($i=0; $i<60; $i++) {
$a=rand(0,6);
$s += $a;
}
  echo '<br/> o resultado deu  '.round($s/30,0).'<br/>';

/** 3) - ceil() arredonda numero para cima.
 * ---*/
     echo ceil(0.0012).'<br/>';

/** 4) - o numero pi e definido pela constante do PHP  M_PI.
 * ---*/
   echo 'o número PI é:   ' . M_PI;
?>
