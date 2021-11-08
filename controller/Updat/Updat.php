<?php
require '../controller/Cadastros/Cadastro.php';

class Updat extends Cadastro
{
    // alterar status do pedido quando clicar em finalizar
    public function aterarStatusDoPedidoAudiritaDoResumo($pedido) {
        $mudarStatusDoPeidoPraFinalizado = "UPDATE auditoria_wms_aereo_atualizada SET status = 'Finalizado' where id = '$pedido'";
        $mudarStatusDoPeidoPraFinalizado = $this->db->prepare($mudarStatusDoPeidoPraFinalizado);
        $mudarStatusDoPeidoPraFinalizado->execute();
        if ($mudarStatusDoPeidoPraFinalizado->rowCount() > 0) {
            header('Location: ../views/painel/cadastros.php?cadastro_erros_aereo');
        } else {
            header('Location: ../views/painel/cadastros.php?erro');
        }
    }
    // fazer consulta no banco: caso não ejar registro encontrados: retornar 2 (usado no front pra esconder o botao de finalizar pedido sem item cadastrado)
    public function naoPodeFinalizarPedidoVazio($pedido): int{
        $naopodemudarPedidoVaziaoEsconderBotaoNatela = "SELECT  * FROM auditoria_wms_aereo_objetos_atualizada WHERE PEDIDO = :PEDIDO ";
        $naopodemudarPedidoVaziaoEsconderBotaoNatela = $this->db->prepare($naopodemudarPedidoVaziaoEsconderBotaoNatela);
        $naopodemudarPedidoVaziaoEsconderBotaoNatela->bindValue(':PEDIDO', $pedido);
        $naopodemudarPedidoVaziaoEsconderBotaoNatela->execute();
        if ($naopodemudarPedidoVaziaoEsconderBotaoNatela->rowCount()) {
            return  1;
        } else {
            $naopodemudarPedidoVaziaoEsconderBotaoNatela = "SELECT  * FROM auditoria_wms_aereo_objetos_atualizada WHERE PEDIDO = '1' ";
            $naopodemudarPedidoVaziaoEsconderBotaoNatela = $this->db->prepare($naopodemudarPedidoVaziaoEsconderBotaoNatela);
            $naopodemudarPedidoVaziaoEsconderBotaoNatela->execute();
            return 2;
        }
    }
}
