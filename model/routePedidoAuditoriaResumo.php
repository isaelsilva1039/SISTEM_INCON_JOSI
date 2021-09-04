
<?php
include '../conexao/Conexao.php';
require '../controller/Cadastros/Cadastro.php';
$lista[] = $_POST['usuario_logado'];
$lista[] = $_POST['data'];
$lista[] = $_POST['i0_filial'];
$lista[] = $_POST['d0_bloco'];
$lista[] = $_POST['tipo_auditoria'];
$lista[] = $_POST['cid'];
$lista[] = $_POST['rua'];
$lista[] = $_POST['total_objetos'];
$lista[] = $_POST['objetos_nao_conforme'];
// $lista[] = $_POST['digitado'];
$cadastros = new Cadastro;
$cadastros->cadastroPedidoAuditoriaResumo($lista);
