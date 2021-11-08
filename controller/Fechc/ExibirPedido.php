<?php

class ExibirPedido extends Conexao
{
    public  function pegarPedido($PEDIDO)
    {
        $selecionarPediDosAtravesDoIdDoResumoCadastrado = "SELECT  * FROM auditoria_wms_aereo_objetos_atualizada WHERE PEDIDO = :PEDIDO order by id desc ";
        $selecionarPediDosAtravesDoIdDoResumoCadastrado = $this->db->prepare($selecionarPediDosAtravesDoIdDoResumoCadastrado);
        $selecionarPediDosAtravesDoIdDoResumoCadastrado->bindValue(':PEDIDO', $PEDIDO);
        $selecionarPediDosAtravesDoIdDoResumoCadastrado->execute();
        if ($selecionarPediDosAtravesDoIdDoResumoCadastrado->rowCount()) {
            return  $selecionarPediDosAtravesDoIdDoResumoCadastrado->fetchAll();
        } else {
            $selecionarPediDosAtravesDoIdDoResumoCadastrado = "SELECT  * FROM auditoria_wms_aereo_objetos_atualizada WHERE PEDIDO = '1' ";
            $selecionarPediDosAtravesDoIdDoResumoCadastrado = $this->db->prepare($selecionarPediDosAtravesDoIdDoResumoCadastrado);
            $selecionarPediDosAtravesDoIdDoResumoCadastrado->execute();
            return $selecionarPediDosAtravesDoIdDoResumoCadastrado->fetchAll();
        }
    }

}
