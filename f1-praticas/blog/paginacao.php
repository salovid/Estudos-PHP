<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexao);?>

<section class="paginacao">
  <ul>
    
    <?php if(pagina_atual() === 1): ?>
        <li class="disabled">&laquo;</li>
      <?php else: ?>
        <li><a href="index.php?p=<?php echo pagina_atual() - 1 ?>" >&laquo;</a></li>
    <?php endif?>
    
    <?php for($i = 1; $i <= $numero_paginas; $i++) : ?>
      <?php if(pagina_atual() === $i):?>
           <li class="active">
                <?php echo $i; ?>
           </li>
        <?php else: ?>
            <li><a href="index.php?p=<?php echo $i;?>"> <?php echo $i; ?> </a></li>
      <?php endif; ?>
    <?php endfor; ?>
    
    <?php if(pagina_atual() == $numero_paginas):?>
      <li class="disabled"> &raquo;</li>
    <?php else: ?>
      <li><a href="index.php?p=<?php echo pagina_atual() + 1; ?>">&raquo;</a></li>
    <?php endif; ?>
    
  </ul>
</section>