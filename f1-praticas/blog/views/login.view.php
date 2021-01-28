<?php require 'header.php';  ?>

<div class="container">
  <div class="post">
 
     <article>
       <h2 class="titulo"> Iniciar Sessão</h2>
      <form class="formulario"  method="post" action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="text" name="usuario" placeholder="Usuário: " />
        <input type="password" name="password"  placeholder="Contra-senha:"/>
        <input type="submit"  value="Iniciar Sessão" />
        
        
        
      </form>
     </article>
    
   
  </div>


</div>



<?php require 'footer.php'; ?>
