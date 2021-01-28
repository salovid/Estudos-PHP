<?php
require 'funcoes.php';
$conexao = conexao('galeria_pratica', 'root','');

if(!$conexao){
   /* header('Location: index.php'); */
    (die);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['tfoto']['tmp_name']);
    if($check !==false){
        $pasta_destino = 'fotos/'  ;
        $arquivo_subido = $pasta_destino . $_FILES['tfoto']['name'];
        #pasta aonde vão ser armazenadas as fotos subidas
        move_uploaded_file($_FILES['tfoto']['tmp_name'], $arquivo_subido);
        
        $statement = $conexao->prepare(
        'INSERT INTO fotos (titulo, imagem, texto)
            VALUES (:titulo, :imagem, :texto)
        ');
        
        $statement -> execute(array(
            ':titulo' => $_POST['ttitulo'],
            ':imagem' =>$_FILES['tfoto']['name'],
            ':texto'=>$_POST['ttexto']
        ));
        
        header('Location: index.php');
    }  else {
        $error = "O arquivo não é imagem ou é muito pesado";
    }
}

require 'views/subir.view.php';

?>
