<?php

if (isset($COOKIE['font-size'])) {
    $tamanho = htmlspecialchars($_COOKIE['font-size']);
}   else {
  $tamanho='15px';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
  <style>
    p {
      font-size: <?php echo $tamanho; ?> ;
    }
  </style>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cupiditate dignissimos et eveniet fuga non quam sit tenetur? Ad atque id ipsam iure numquam optio repellendus velit vitae, voluptatem voluptatum. </p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt impedit mollitia officia quaerat voluptatum! Blanditiis consectetur doloremque enim excepturi facere nemo nulla similique totam. Aspernatur cumque doloremque eius illo quam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti distinctio et ex fuga fugit iste maxime nostrum, possimus quod reiciendis sapiente sint soluta voluptas. Deleniti dolorem facere itaque iusto </p>                  
</body>
</html>