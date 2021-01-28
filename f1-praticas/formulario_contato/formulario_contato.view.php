

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário de Contato</title>
  <link href="formulario_contato.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <div class="wrap">
    
    <form method="get" action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " id="fContato" >
        <Label for="cNome"></Label>
        <input type="text" class="form-control" name="tNome"  id="cNome" placeholder="Nome:" value="<?php if(!$enviado && isset($nomed)) echo $nomed ?>" />
         <!--se não enviado em outra vez vez, pois vai enviar e tem informação na variavel nome então mostre conteúdo de $nomed-->
      <Label for="cMail"></Label>
      <input type="email" class="form-control" name="tMail"  id="cMail" placeholder="email:" value="<?php if(!$enviado && isset($email)) echo $email ?>"  />
      
      <textarea  name="tMsg"  id="cMens" class="form-control" placeholder="Mensagem:" ><?php if(!$enviado && isset($mensagem)) echo $mensagem ?></textarea>
   
      
      
               <!--criado duas div e duas classes alert e errors das variaveis vindas da pagina php pincipal c04-php..combina a condição de não ter enviado dados com codigo html para mostrar de forma estilosa na página do formulário.-->
        <?php if (!empty($erros)): ?>
        <!--se $erros não esta vazia, condição verdadeira, então ha erros, porque foi enviado informação sem conteúdo..  $erros .= 'Por favor digite o Nome" <br/>'; vindo de else no arquivo c04-php..-->
          <div class="alert error">
             <?php echo $erros; ?>
          </div>
            <!--se usuário inseriu os dados corretamente-->
        <?php elseif ($enviado) : ?>
          <div class="alert success">
            <p>Enviado com Sucesso!</p>
          </div>
        
        <?php endif ?>
      
      
        
        <input type="submit" name="tEnviar" class="btn btn-primary" value="Enviar" />
      
    </form>
  </div>
</body>
</html>