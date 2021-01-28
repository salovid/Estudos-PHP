<?php
require '../views/header.php';
?>

<div class="container">
  <h2>Painel de Controle</h2>
  <a href="novo.php" class="btn">Novo Post</a>
  <a href="fecha.php" class="btn">Fechar sessão</a>
    <?php foreach($posts as $post): ?>
      <div class="post">
        <article>
          <h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo'];  ?></h2>
          <a href="editar.php?id=<?php echo $post['id'];?>" class="">Editar</a>
          <a href="../single.php?id=<?php echo $post['id'];?>" class="">Ver</a>
          <a href="deletar.php?id=<?php echo $post['id'];?>" class="">Deletar</a>
        </article>

      </div>
    <?php endforeach;?>
    
    <?php require '../paginacao.php' ?>


</div>
<?php require '../views/footer.php'; ?>