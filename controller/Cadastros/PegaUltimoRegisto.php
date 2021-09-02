<?php 
// include '../../controller/Cadastros/Cadastro.php';
include '../../conexao/Conexao.php'; 
class PegaUltimoRegistro extends Conexao {

    public function pegarUltimoIdPorUsuarioLogado($usuario_logado)
    {
      $sql=" select * from AUDITORIA_WMS_AEREO_ATUALIZADA  where usuario_logado = '$usuario_logado' order by id desc limit 1";
      $sql = $this->db->prepare($sql);
      $sql->execute();
      if ($sql->rowCount() > 0) {
        $numeroPedidoAuditoria = $sql->fetch()[0];
        return $numeroPedidoAuditoria; 
      }else {
        return "Sem pedido encontrado pra esse usuario";
      }
    }
}

?>