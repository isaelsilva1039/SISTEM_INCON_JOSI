
<?php
include '../conexao/Conexao.php';
require '../controller/Cadastros/Cadastro.php';

$lista[]  =  $data             = $_POST['data'];
$lista[]  =  $PEDIDO           = $_POST['pedido'];
$lista[]  =  $USUARIO_LOGADO   = $_POST['usuario_logado'];
$lista[]  =  $I0_FILIAL        = $_POST['i0_filial'];
$lista[]  =  $CODIGO_AUDITOR   = $_POST['codigo_auditor'];
$lista[]  =  $NOME_AUDITOR     = $_POST['NOME_AUDITOR'];
$lista[]  =  $OBJETO           = $_POST['objeto'];
$lista[]  =  $CODIGO_OPERADOR  = $_POST['codigo_operador'];
$lista[]  =  $NOME_OPERADOR    = $_POST['NOME_OPERADOR'];
$lista[]  =  $TIPO_MOVIMENTO   = $_POST['tipo_movimento'];
$lista[]  =  $VALOR_DESCONTO   = $_POST['VALOR_DESCONTO'];


$cadastros = new Cadastro();
$cadastros->cadastroPedidoAuditoriaPorObjetoEpedido(
    $lista,
    $data,
    $PEDIDO,
    $USUARIO_LOGADO,
    $I0_FILIAL,
    $CODIGO_AUDITOR,
    $NOME_AUDITOR,
    $OBJETO,
    $CODIGO_OPERADOR,
    $NOME_OPERADOR,
    $TIPO_MOVIMENTO,
    $VALOR_DESCONTO
);

