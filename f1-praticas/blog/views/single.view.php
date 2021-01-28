<?php
require 'header.php';
?>
  
  <div class="container">
    <div class="post">
      <article>
        <h2 class="titulo"> <?php echo $post['titulo'];?></h2>
        <p class="data"><?php echo data($post['data']);?></p>
        <?php if(!empty($post['thumb'])): ?>
        <div class="thumb">
            <img src="<?php echo ROTA;?>imagens/<?php echo $post['thumb'];?>" alt="<?php echo $post['titulo'];?>" >
        </div>
       
          <?php echo '<div>'.  $post['extrato'].'</div>';?>
          <hr>
        <?php endif; ?>
      </article>
      <div > <?php echo nl2br($post['texto']);?></div>
      <hr>
        <?php require 'extra.php'; ?>
    </div>
    
 
  </div>




<?php require 'footer.php'; ?>