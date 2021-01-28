<?php require '../views/header.php'; ?>
  
  <div class="container">
    <div class="post">
      <article>
        <h2 class="titulo">Editar Artigo</h2>
        <form enctype="multipart/form-data" action=" <?php echo htmlspecialchars  ($_SERVER['PHP_SELF'] );?>" class="formulario" method="post">
          
          <input type="hidden" value="<?php echo $post['id'] ?>" name="id" />
          
          <input type="text" name="titulo" value="<?php echo $post['titulo'] ?>"/>
          <input type="text" name="extrato" value="<?php echo $post['extrato']?>"/>
          <textarea name="texto" ><?php echo $post['texto'] ?></textarea>
          <!--observação...não pode deixar espaços entre fechamento e abertura da tag textarea..se não nao nao aparece o placehoder..kkkkk   -->
          <input type="file" name="thumb"/>
          
          <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb'] ?>"/>
          
          <input type="submit" value="Modificar Artigo"/>
        </form>
      </article>
    </div>
  </div>


<?php require '../views/footer.php';  ?>