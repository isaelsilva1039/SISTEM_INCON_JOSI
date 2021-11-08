<?php
    require '../controller/Cadastros/Cadastro.php';
    
    class Delete extends Cadastro{
       
        public function deletaPedidoQueNaoVaiSerUsado($id){
            $deletarPedidoDoSeuUsuario = "DELETE FROM auditoria_wms_aereo_atualizada  where id = '$id'";
            $deletarPedidoDoSeuUsuario = $this->db->prepare($deletarPedidoDoSeuUsuario);
            $deletarPedidoDoSeuUsuario->execute();
            if($deletarPedidoDoSeuUsuario->rowCount() > 0){
                 header('Location: ../views/painel/cadastros.php?cadastro_erros_aereo');
            }else{
                header('Location: ../views/painel/cadastros.php?erro');
            }
        }

        public function DeleteObjeto($id){
            $deletarErroLançadoDoObjetos = "DELETE FROM auditoria_wms_aereo_objetos_atualizada  where id = '$id'";
            $deletarErroLançadoDoObjetos = $this->db->prepare($deletarErroLançadoDoObjetos);
            $deletarErroLançadoDoObjetos->execute();
            if($deletarErroLançadoDoObjetos->rowCount() > 0){
                 header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
            }else{
                header('Location: ../views/painel/cadastros.php?erro');
            }
        }
    }
?>