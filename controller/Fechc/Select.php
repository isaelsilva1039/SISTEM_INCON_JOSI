<?php
include '../../autoload.php';
class Select extends Conexao
{
    // selecionar o nome do usuario automatico atraves do jquery - method pra selecionar nome do usuario atravez do codigo digitado no front
    public function usuarioSelecionadoErro($usuario)
    {
        $selecionarUsuarioEpuxarAutomaticoPrarelaDecadastraOerro = "SELECT  * FROM usuarios_filial WHERE numero_usuario = :numero_usuario order by id desc ";
        $selecionarUsuarioEpuxarAutomaticoPrarelaDecadastraOerro = $this->db->prepare($selecionarUsuarioEpuxarAutomaticoPrarelaDecadastraOerro);
        $selecionarUsuarioEpuxarAutomaticoPrarelaDecadastraOerro->bindValue(':numero_usuario', $usuario);
        $selecionarUsuarioEpuxarAutomaticoPrarelaDecadastraOerro->execute();
        if ($selecionarUsuarioEpuxarAutomaticoPrarelaDecadastraOerro->rowCount()) {
            foreach ($selecionarUsuarioEpuxarAutomaticoPrarelaDecadastraOerro->fetchAll() as $key_chave_de_acesso) {
                $nomeDoFuncionario = $key_chave_de_acesso['nome'];
                $cargoDoFuncionario = $key_chave_de_acesso['cargo'];
                if ($key_chave_de_acesso['cargo'] == '26 - Auditor Aereo') {
                    echo "<br> <input type='text' name='NOME_AUDITOR' disabled class='form-control cc-cvc' value='$nomeDoFuncionario'>$cargoDoFuncionario</input>";
                    echo "<br> <input type='text' name='NOME_AUDITOR' hidden class='form-control cc-cvc' value='$nomeDoFuncionario'></input>";
                } else {
                    echo "<br> <input type='text' name='NOME_OPERADOR' disabled class='form-control cc-cvc' value='$nomeDoFuncionario'>$cargoDoFuncionario</input>";
                    echo "<br> <input type='text' name='NOME_OPERADOR' hidden class='form-control cc-cvc' value='$nomeDoFuncionario'></input>";
                }
            }
        } else {
            $selecionarUsuarioUmInexistente = "SELECT  * FROM usuarios_filial WHERE numero_usuario = '1' ";
            $selecionarUsuarioUmInexistente = $this->db->prepare($selecionarUsuarioUmInexistente);
            $selecionarUsuarioUmInexistente->execute();
            return $selecionarUsuarioUmInexistente->fetchAll();
        }
    }
    // selecionar o tipo do erro automatico atraves do jquery - method pra selecionar tipo do erro atravez do selecionado digitado no front
    public function valorAserDesContadorPorTipoEerroEncontrado($tipo_erro)
    {
        $seleciobarTipoDoErroAutomatico = "SELECT  * FROM tipo_erro WHERE tipo_erro = :tipo_erro order by id desc ";
        $seleciobarTipoDoErroAutomatico = $this->db->prepare($seleciobarTipoDoErroAutomatico);
        $seleciobarTipoDoErroAutomatico->bindValue(':tipo_erro', $tipo_erro);
        $seleciobarTipoDoErroAutomatico->execute();
        if ($seleciobarTipoDoErroAutomatico->rowCount()) {
            foreach ($seleciobarTipoDoErroAutomatico->fetchAll() as $key_chave_indece) {
                $selecionar_valor_descontro_automatico = $key_chave_indece['valor_desconto'];
                echo "<br> <input type='text' name='VALOR_DESCONTO' disabled class='form-control cc-cvc' value='$selecionar_valor_descontro_automatico'>Valor Desconto";
                echo "<br> <input type='text' name='VALOR_DESCONTO' hidden class='form-control cc-cvc' value='$selecionar_valor_descontro_automatico'></input>";
            }
        } else {
            $seleciobarTipoDoErroAutomatico = "SELECT  * FROM usuarios_filial WHERE numero_usuario = '1' ";
            $seleciobarTipoDoErroAutomatico = $this->db->prepare($seleciobarTipoDoErroAutomatico);
            $seleciobarTipoDoErroAutomatico->execute();
            return $seleciobarTipoDoErroAutomatico->fetchAll();
        }
    }
    // pegando a filial pra telas
    public function pegarFilial()
    {
        $selecionandoAFilial = "SELECT * FROM filial_cd";
        $selecionandoAFilial = $this->db->prepare($selecionandoAFilial);
        $selecionandoAFilial->execute();
        if ($selecionandoAFilial->rowCount() > 0) {
            foreach ($selecionandoAFilial->fetchAll() as $nomeFilial) {
                echo "<option>" . $nomeFilial['d0_filial'] . "</option>";
            }
        } else {
            echo "<option selected disabled>" . "sem filial cadastrada" . "</option>";
        }
    }
}
