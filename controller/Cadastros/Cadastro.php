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
      var_dump("erro");
      //header('Location: ../views/painel/cadastros.php?erro') ;
    }
  }

  public function cadastroPedidoAuditoriaResumo($lista)
  {
    $sql = "INSERT INTO AUDITORIA_WMS_AEREO_ATUALIZADA (usuario_logado,DATA, PEDIDO,I0_FILIAL,d0_bloco,TIPO_AUDITORIA,CID, RUA,TOTAL_OBJETOS,OBJETOS_NAO_CONFORME)
       values ('$lista[0]','$lista[1]','$lista[2]', '00','$lista[3]','$lista[4]','$lista[5]','$lista[6]','$lista[7]','$lista[8]')";
    $sql = $this->db->prepare($sql);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
    } else {
      header('Location: ../views/painel/cadastros.php?erro');
    }
  }
}
