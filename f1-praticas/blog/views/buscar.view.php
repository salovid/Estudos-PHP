<?php
require 'header.php';
?>

<div class="container">
    <?php foreach($resultados as $post): ?>
      <div class="post">
        <article>
          <h2 class="titulo"><a href="single.php?id=<?php echo $post['id'] ; ?>  "> <?php echo $post['titulo'] ; ?></a> </h2>
          <p class="data"><?php echo data($post['data']) ; ?> </p>
          <div class="thumb">
            <a href="single.php?id=<?php echo $post['id'] ; ?> ">
              <img src="<?php echo ROTA;?>imagens/<?php echo $post['thumb'] ; ?>" alt="" >
            </a>
          </div>
          <p class ="extrato"><?php echo $post['extrato'] ; ?></p>
          <a href="single.php?id=<?php echo $post['id'] ; ?> " class="continuar">Ver mais..</a>
        </article>
      </div>
    <?php endforeach;?>
    
    <?php require 'paginacao.php' ?>
</div>
<?php require 'footer.php'; ?>