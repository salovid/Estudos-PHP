<?php
function comprovar_sessao(){
    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }
    
}

?>
