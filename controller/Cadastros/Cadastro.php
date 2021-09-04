<?php
include '../conexao/Conexao.php';
class Cadastro extends  Conexao
{

  public function cadastroFilial($i0_filial, $d0_filial, $d0_descricao, $d0_sigla, $i0_cliente, $i0_fornecedor, $d0_regional)
  {

    $sql = "INSERT INTO filial_cd (i0_filial, d0_filial, d0_descricao, d0_sigla, i0_cliente, i0_fornecedor, d0_regional)
                values (:i0_filial, :d0_filial, :d0_descricao, :d0_sigla, :i0_cliente, :i0_fornecedor, :d0_regional)";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':i0_filial', $i0_filial);
    $sql->bindValue(':d0_filial', $d0_filial);
    $sql->bindValue(':d0_descricao', $d0_descricao);
    $sql->bindValue(':d0_sigla', $d0_sigla);
    $sql->bindValue(':i0_cliente', $i0_cliente);
    $sql->bindValue(':i0_fornecedor', $i0_fornecedor);
    $sql->bindValue(':d0_regional', $d0_regional);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      header('Location: ../views/painel/cadastros.php?ok');
    } else {
      header('Location: ../views/painel/cadastros.php?erro');
    }
  }

  public function cadastroPedidoAuditoriaResumo($lista)
  {
    $sql = "INSERT INTO AUDITORIA_WMS_AEREO_ATUALIZADA (usuario_logado,DATA, PEDIDO,I0_FILIAL,d0_bloco,TIPO_AUDITORIA,CID, RUA,TOTAL_OBJETOS,OBJETOS_NAO_CONFORME)
       values ('$lista[0]','$lista[1]','00', '$lista[2]','$lista[3]','$lista[4]','$lista[5]','$lista[6]','$lista[7]','$lista[8]')";
    $sql = $this->db->prepare($sql);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
    } else {
      header('Location: ../views/painel/cadastros.php?erro');
    }
  }

  public function cadastroPedidoAuditoriaPorObjetoEpedido($lista, $data, $PEDIDO, $USUARIO_LOGADO, $I0_FILIAL, $CODIGO_AUDITOR, $OBJETO, $VALIDADE_ERRADA, $VALIDADE_CORRETA, $QTD_PEDIDO, $QTD_ENCONTRADO, $CODIGO_OPERADOR, $TIPO_MOVIMENTO, $VALOR_DESCONTO)
  {
    $sql = "insert into auditoria_wms_aereo_objetos_atualizada(data, PEDIDO, USUARIO_LOGADO, I0_FILIAL,CODIGO_AUDITOR,OBJETO,VALIDADE_ERRADA,VALIDADE_CORRETA,QTD_PEDIDO,QTD_ENCONTRADO,CODIGO_OPERADOR,NOME_OPERADOR,TIPO_MOVIMENTO,VALOR_DESCONTO)
      values (:data,:PEDIDO,:USUARIO_LOGADO,:I0_FILIAL,:CODIGO_AUDITOR,:OBJETO,:VALIDADE_ERRADA,:VALIDADE_CORRETA,:QTD_PEDIDO,:QTD_ENCONTRADO,:CODIGO_OPERADOR,':nome_operador',:TIPO_MOVIMENTO,:VALOR_DESCONTO)";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':data',            $data);
    $sql->bindValue(':PEDIDO',          $PEDIDO);
    $sql->bindValue(':USUARIO_LOGADO',  $USUARIO_LOGADO);
    $sql->bindValue(':I0_FILIAL',       $I0_FILIAL);
    $sql->bindValue(':CODIGO_AUDITOR',  $CODIGO_AUDITOR);
    $sql->bindValue(':OBJETO',          $OBJETO);
    $sql->bindValue(':VALIDADE_ERRADA', $VALIDADE_ERRADA);
    $sql->bindValue(':VALIDADE_CORRETA',$VALIDADE_CORRETA);
    $sql->bindValue(':QTD_PEDIDO',      $QTD_PEDIDO);
    $sql->bindValue(':QTD_ENCONTRADO',  $QTD_ENCONTRADO);
    $sql->bindValue(':CODIGO_OPERADOR', $CODIGO_OPERADOR);
    $sql->bindValue(':TIPO_MOVIMENTO',  $TIPO_MOVIMENTO);
    $sql->bindValue(':VALOR_DESCONTO',  $VALOR_DESCONTO);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
    } else {
      header('Location: ../views/painel/cadastros.php?erro');
    }
  }

  public  function FunctionName()
  {
    return "Botão clicado";
  }
}
