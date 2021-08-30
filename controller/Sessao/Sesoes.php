<?php 
session_start();
    // session_destroy();

    if (isset($_SESSION['usuario'])) {
        session_destroy();
    header('Location: ../../index.php?deslogado');
    }

?>