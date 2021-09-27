<?php

include '../../autoload.php';
class Select extends Conexao
{
    public function usuarioSelecionadoErro($usuario)
    {
        $sql = "SELECT  * FROM usuarios_filial WHERE numero_usuario = :numero_usuario order by id desc ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':numero_usuario', $usuario);
        $sql->execute();
        if ($sql->rowCount()) {
            foreach ($sql->fetchAll() as $key) {
                $nome = $key['nome'];
                $cargo = $key['cargo'];
                if ($key['cargo'] == '26 - Auditor aereo') {
                    echo "<br> <input type='text' name='NOME_AUDITOR' disabled class='form-control cc-cvc' value='$nome'>$cargo</input>";
                    echo "<br> <input type='text' name='NOME_AUDITOR' hidden class='form-control cc-cvc' value='$nome'></input>";
                }else {
                    echo "<br> <input type='text' name='NOME_OPERADOR' disabled class='form-control cc-cvc' value='$nome'>$cargo</input>";
                    echo "<br> <input type='text' name='NOME_OPERADOR' hidden class='form-control cc-cvc' value='$nome'></input>";
                }
            }
        } else {
            $sql = "SELECT  * FROM usuarios_filial WHERE numero_usuario = '1' ";
            $sql = $this->db->prepare($sql);
            $sql->execute();
            return $sql->fetchAll();
        }
    }

    public function valorAserDesContadorPorTipoEerroEncontrado($tipo_erro){
        $sql = "SELECT  * FROM tipo_erro WHERE tipo_erro = :tipo_erro order by id desc ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':tipo_erro', $tipo_erro);
        $sql->execute();
        if ($sql->rowCount()) {
            foreach ($sql->fetchAll() as $key) {
                   $nome = $key['valor_desconto'];
                    echo "<br> <input type='text' name='VALOR_DESCONTO' disabled class='form-control cc-cvc' value='$nome'>audiotor";
                    echo "<br> <input type='text' name='VALOR_DESCONTO' hidden class='form-control cc-cvc' value='$nome'></input>";
            }
        } else {
            $sql = "SELECT  * FROM usuarios_filial WHERE numero_usuario = '1' ";
            $sql = $this->db->prepare($sql);
            $sql->execute();
            return $sql->fetchAll();
        }
    }

}
