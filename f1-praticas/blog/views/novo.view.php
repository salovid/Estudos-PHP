<?php require '../views/header.php'; ?>

<div class="container">
  <div class="post">
    <article>
      <h2 class="titulo">Novo Artigo</h2>
      <form enctype="multipart/form-data" action=" <?php echo htmlspecialchars  ($_SERVER['PHP_SELF'] );?>" class="formulario" method="post">
          <input type="text" name="titulo" placeholder = "Título do Artigo:"/>
          <input type="text" name="extrato" placeholder = "Extrato do Artigo:"/>
          <textarea name="texto" placeholder = "Texto do Artigo:"></textarea>
        <!--observação...não pode deixar espaços entre fechamento e abertura da tag textarea..se não nao nao aparece o placehoder..kkkkk   -->
         <input type="file" name="thumb"/>
        <input type="submit" value="Criar Artigo"/>
      </form>
    </article>
  </div>
</div>


<?php require '../views/footer.php';  ?>
