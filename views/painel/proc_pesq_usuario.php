<?php 
    include ('../../controller/Fechc/Select.php');
 
    $palavra = $_POST['palavra'];

    $select = new Select();
    $select->usuarioSelecionadoErro($palavra);
