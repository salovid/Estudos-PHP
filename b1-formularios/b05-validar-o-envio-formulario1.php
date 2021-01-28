<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'Dados enviados por GET';
}
    else {
     echo 'Os dados foram enviados por POST';
    }

?>
