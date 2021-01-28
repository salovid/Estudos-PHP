<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <title>Registrar-se</title>
</head>
<body>
<div class="container" >
  <h1 class="titulo">Registrar-se</h1>
  <hr class="border" >
  
  <form method="POST"  action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  class="formulario" name="login" id="fContato">
    
    <div class="form-group">
      <i class="icone esquerda fa fa-user"></i>  <input type="text"  name="tUsuario" class="usuario"  placeholder="Usuário"/>
    </div>

    <div class="form-group">
      <i class="icone esquerda fa fa-lock"></i>  <input type="password"  name="tPassword" class="password"  placeholder="Contra-senha"/>
    </div>

    <div class="form-group">
      <i class="icone esquerda fa fa-lock"></i>  <input type="password"  name="tPassword2" class="password_btn"  placeholder="Repetir Contra-senha"/>
      <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
    </div>
     <?php if(!empty($erros)): ?>
     <div class="erro">
       <ul>
         <?php echo $erros;?>
       </ul>
     </div>
    <?php endif ;?>
    
  </form>
  <p class="texto-registro">
     Se nao tiver uma conta?
  <a href = "registro.php">Registrar</a>
  </p>

</div>
</body>
</html>