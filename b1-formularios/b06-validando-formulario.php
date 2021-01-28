<?php
    #verificar se usuario enviou os dados:
$erros= '';

    if (isset($_GET['tEnviar'])) {
        $nome1 = $_GET['tNome'];
        $mail1 = $_GET['tMail'];
    
        #validando o formulario:
        if(!empty($nome1)) {
            $nome1 = trim($nome1); # elimina os espaços em branco,, tanto no inicio, quanto no fim.
            $nome1=htmlspecialchars($nome1); #faz com que  simbolos especiais fiquem com os entidades html.
            $nome1=stripslashes($nome1); #elimina as barras, para evirar injeção código.
                 #elimina as tags entre simbolos <...>
            $nome1 = filter_var($nome1, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    
    
            #veja a diferença de formatação para o mesmo resultado
            echo "Seu nome :  . $nome1 .<br/>";
        }
        else{
                $erros .='digita o nome, e email, por favor! <br/>' ;
                }
        if(!empty($mail1)) {
                $mail1=filter_var($mail1, FILTER_SANITIZE_EMAIL);
                
                if(!filter_var($mail1,FILTER_VALIDATE_EMAIL ))
                    {
                    $erros .= 'digite o email, de novo. ';
                
                }
                
            else {
                echo 'seu email é: ' . $mail1 . '<br/>';
            }
        }
        
        else{
            $erros .= 'digite o email por favor.';
        }
    
        
        
    }
    else {
        echo 'por favor queira informar' ;
    }
 
         


?>

<!DOCTYPE html>
<html lang ="pt-br">
    <head>
        <title>validando um formulário em PHP</title>
        <meta charset ="UTF-8"/>
        <link rel="stylesheet" href="../_css/form.css" >
        <style>.erro{
                color:red;
                font-weight:bold;
            }</style>
    </head>
    <body>
        <form method="get" action= "<?php echo htmlspecialchars ($_SERVER ['PHP_SELF']); ?>">
            <label for="cNome">Nome:</label>
            <input type="text" name="tNome" id="cNome"  size="20" maxlength="30"/> <br/>
            <label for="cMail">Email:</label>
            <input type="email" name="tMail" id="cMail"/>
            
            <?php if(!empty($erros)): ?>
                <div class="erro"><?php echo $erros; ?></div>
            <?php endif;?>
            
            <input type="submit" name="tEnviar" value="por favor, enviar"/>
        </form>
        <?php
       echo '<pre>'; print_r($_GET); echo '</pre>';
        echo htmlspecialchars ($_SERVER ['PHP_SELF']);
        ?>
    </body>

</html>
