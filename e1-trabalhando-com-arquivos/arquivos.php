<?php
//para verificar se um arquivo existe:
#$resultado = file_exists('documento.txt');
    #var_dump($resultado);
#if (file_exists('documento.txt')) {echo 'o arquivo existe';}else{  echo 'o arquivo não existe' ; }
 //para ler informações de um arquivo text:
#echo '<h1>'.file_get_contents('documento.txt').'</h1>';

#a cada vez que abre o navegador fille what are you doing, my fgreat fellow é adicionado em uma nova linha.
#file_put_contents('documento.txt',  "what are you doing, my great fellow ? \n" , FILE_APPEND);

#escrever de 1 a 10.
file_put_contents('documento.txt','');
for($i=1; $i<=10;$i++){
  file_put_contents('documento.txt',"$i\n", FILE_APPEND);
  echo "<pre>";
 
}
 #mostrar a posição numero 7 do array file de documento txt e array por print_r
$arquivo = file('documento.txt');
echo $arquivo[7].'<br/>';
print_r($arquivo);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
<h1></h1>
</body>
</html>