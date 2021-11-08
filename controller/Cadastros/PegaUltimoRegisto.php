<?php 
// include '../../controller/Cadastros/Cadastro.php';

class PegaUltimoRegisto extends Conexao {

    public function pegarUltimoIdPorUsuarioLogado($usuario_logado)
    {
      $pegarUltimoRegistroDoSeuUsuario=" SELECT  * FROM  auditoria_wms_aereo_atualizada  where usuario_logado = '$usuario_logado' order by id desc limit 1";
      $pegarUltimoRegistroDoSeuUsuario = $this->db->prepare($pegarUltimoRegistroDoSeuUsuario);
      $pegarUltimoRegistroDoSeuUsuario->execute();
      if ($pegarUltimoRegistroDoSeuUsuario->rowCount() > 0) {
        $numeroPedidoAuditoria = $pegarUltimoRegistroDoSeuUsuario->fetch();
        return $numeroPedidoAuditoria; 
      }else {
        return "Sem pedido encontrado pra esse usuario";
      }
    }
}

?>