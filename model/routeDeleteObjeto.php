<?php
include '../conexao/Conexao.php';
include '../controller/Delete/Delete.php';
$delete = new Delete();
// var_dump($_GET['id']);
$delete->DeleteObjeto($_GET['id']);
