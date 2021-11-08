<?php
class Cadastro extends Conexao
{
    // cadastra filial
    public function cadastroFilial($i0_filial, $d0_filial, $d0_descricao, $d0_sigla, $i0_cliente, $i0_fornecedor, $d0_regional)
    {
        $cadastrarNovaFilial = "INSERT INTO filial_cd (i0_filial, d0_filial, d0_descricao, d0_sigla, i0_cliente, i0_fornecedor, d0_regional)
            values (:i0_filial, :d0_filial, :d0_descricao, :d0_sigla, :i0_cliente, :i0_fornecedor, :d0_regional)";
        $cadastrarNovaFilial = $this->db->prepare($cadastrarNovaFilial);
        $cadastrarNovaFilial->bindValue(':i0_filial', $i0_filial);
        $cadastrarNovaFilial->bindValue(':d0_filial', $d0_filial);
        $cadastrarNovaFilial->bindValue(':d0_descricao', $d0_descricao);
        $cadastrarNovaFilial->bindValue(':d0_sigla', $d0_sigla);
        $cadastrarNovaFilial->bindValue(':i0_cliente', $i0_cliente);
        $cadastrarNovaFilial->bindValue(':i0_fornecedor', $i0_fornecedor);
        $cadastrarNovaFilial->bindValue(':d0_regional', $d0_regional);
        $cadastrarNovaFilial->execute();
        if ($cadastrarNovaFilial->rowCount() > 0) {
            header('Location: ../views/painel/cadastros.php?ok');
        } else {
            header('Location: ../views/painel/cadastros.php?erro');
        }
    }

    // cadastrar resumo da audiotira
    public function cadastroPedidoAuditoriaResumo($usuario_logado, $DATA, $I0_FILIAL, $d0_bloco, $TIPO_AUDITORIA, $CID, $RUA, $TOTAL_OBJETOS, $OBJETOS_NAO_CONFORME)
    {
        // caso for criar um novo pedido, e ja exista um pedido em digitação voltar ele pra tela inicial, infomando que ele tem um pedido em andamento
        if ($this->ValidadePedidoEmdigitaCaoUsuarioLogado($usuario_logado) == 1) {
            header('Location: ../views/painel/cadastros.php?voceTemUmpedidoEmAndamento');
        } else {
            $cadastrarAuditoriaDeResumo = "INSERT INTO auditoria_wms_aereo_atualizada (usuario_logado,DATA, PEDIDO,I0_FILIAL,d0_bloco,TIPO_AUDITORIA,CID, RUA,TOTAL_OBJETOS,OBJETOS_NAO_CONFORME,status)values
            (:usuario_logado,:DATA,'00', :I0_FILIAL,:d0_bloco,:TIPO_AUDITORIA,:CID,:RUA,:TOTAL_OBJETOS,:OBJETOS_NAO_CONFORME,'digitado')";
            $cadastrarAuditoriaDeResumo = $this->db->prepare($cadastrarAuditoriaDeResumo);
            $cadastrarAuditoriaDeResumo->bindValue(':usuario_logado', $usuario_logado);
            $cadastrarAuditoriaDeResumo->bindValue(':DATA', $DATA);
            $cadastrarAuditoriaDeResumo->bindValue(':I0_FILIAL', $I0_FILIAL);
            $cadastrarAuditoriaDeResumo->bindValue(':d0_bloco', $d0_bloco);
            $cadastrarAuditoriaDeResumo->bindValue(':TIPO_AUDITORIA', $TIPO_AUDITORIA);
            $cadastrarAuditoriaDeResumo->bindValue(':CID', $CID);
            $cadastrarAuditoriaDeResumo->bindValue(':RUA', $RUA);
            $cadastrarAuditoriaDeResumo->bindValue(':TOTAL_OBJETOS', $TOTAL_OBJETOS);
            $cadastrarAuditoriaDeResumo->bindValue(':OBJETOS_NAO_CONFORME', $OBJETOS_NAO_CONFORME);
            $cadastrarAuditoriaDeResumo->execute();
            if ($cadastrarAuditoriaDeResumo->rowCount() > 0) {
                header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
            } else {
                header('Location: ../views/painel/cadastros.php?preenchaTodosOsCampos');
            }
        }
    }
    // cadastra erros dentro do re  sumo da auditoria
    public function cadastroPedidoAuditoriaPorObjetoEpedido($lista, $data, $PEDIDO, $USUARIO_LOGADO, $I0_FILIAL, $CODIGO_AUDITOR, $NOME_AUDITOR, $OBJETO, $CODIGO_OPERADOR, $NOME_OPERADOR, $TIPO_MOVIMENTO, $VALOR_DESCONTO)
    {
        if ($this->validarCampoAuditorPreencherComCodicoreto($CODIGO_AUDITOR) == false) {
            header('Location: ../views/painel/cadastros.php?erro');
            exit();
        }
        $cadastrarErrosEncontardosNoObjtos = "insert into auditoria_wms_aereo_objetos_atualizada(data, PEDIDO, USUARIO_LOGADO, I0_FILIAL,CODIGO_AUDITOR,NOME_AUDITOR,OBJETO,CODIGO_OPERADOR,NOME_OPERADOR,TIPO_MOVIMENTO,VALOR_DESCONTO)
      values (:data,:PEDIDO,:USUARIO_LOGADO,:I0_FILIAL,:CODIGO_AUDITOR,:NOME_AUDITOR,:OBJETO,:CODIGO_OPERADOR,:NOME_OPERADOR,:TIPO_MOVIMENTO,:VALOR_DESCONTO)";
        $cadastrarErrosEncontardosNoObjtos = $this->db->prepare($cadastrarErrosEncontardosNoObjtos);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':data', $data);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':PEDIDO', $PEDIDO);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':USUARIO_LOGADO', $USUARIO_LOGADO);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':I0_FILIAL', $I0_FILIAL);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':CODIGO_AUDITOR', $CODIGO_AUDITOR);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':NOME_AUDITOR', $NOME_AUDITOR);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':OBJETO', $OBJETO);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':CODIGO_OPERADOR', $CODIGO_OPERADOR);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':NOME_OPERADOR', $NOME_OPERADOR);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':TIPO_MOVIMENTO', $TIPO_MOVIMENTO);
        $cadastrarErrosEncontardosNoObjtos->bindValue(':VALOR_DESCONTO', $VALOR_DESCONTO);
        $cadastrarErrosEncontardosNoObjtos->execute();
        if ($cadastrarErrosEncontardosNoObjtos->rowCount() > 0) {
            header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
        } else {
            header('Location: ../views/painel/cadastros.php?erro');
        }
    }
    // caso o susuario logado esta com um pedido em digitação, não deixar ele fazer nem um pedido novo a mais
    public function ValidadePedidoEmdigitaCaoUsuarioLogado($usuario_logado): int
    {
        $consultarUsuarioPedidoPendendete = "SELECT * FROM auditoria_wms_aereo_atualizada WHERE usuario_logado = '$usuario_logado' AND status = 'digitado'";
        $consultarUsuarioPedidoPendendete = $this->db->prepare($consultarUsuarioPedidoPendendete);
        $consultarUsuarioPedidoPendendete->execute();
        if ($consultarUsuarioPedidoPendendete->rowCount() > 0) {
            return $resut = 1;
        } else {
            return $resut = 2;
        }
    }
    //validar compo do auditor: campo do auditor dever ser preenchido somente com o codigo do auditor
    public function validarCampoAuditorPreencherComCodicoreto(int $CODIGO_AUDITOR)
    {
        $consutarUsuarioAuditor = "SELECT * FROM usuarios_filial WHERE numero_usuario = :numero_usuario";
        $consutarUsuarioAuditor = $this->db->prepare($consutarUsuarioAuditor);
        $consutarUsuarioAuditor->bindValue(':numero_usuario', $CODIGO_AUDITOR);
        $consutarUsuarioAuditor->execute();
        if ($consutarUsuarioAuditor->rowCount() > 0) {
            if ($consutarUsuarioAuditor->rowCount() == 0) {
                return false;
            } //ususario não exister
            foreach ($consutarUsuarioAuditor->fetchAll() as $key) {
                $cargo_do_codigo_do_auditor = $key['cargo'];
                if ($cargo_do_codigo_do_auditor != '26 - Auditor Aereo') {
                    return false;
                } else {
                    return true;
                }
            }
        }
    }
}
