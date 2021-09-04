<?php
    require '../controller/Cadastros/Cadastro.php';
    class Updat extends Cadastro{
       
        public function aterarStatusDoPedidoAudiritaDoResumo($pedido){
            $sql = "UPDATE AUDITORIA_WMS_AEREO_ATUALIZADA SET status = 'Finalizado' where id = '$pedido'";
            $sql = $this->db->prepare($sql);
            $sql->execute();
            if($sql->rowCount() > 0){
                 header('Location: ../views/painel/cadastros.php?cadastro_erros_aereo');
            }else{
                header('Location: ../views/painel/cadastros.php?erro');
            }
        }
    }
?>