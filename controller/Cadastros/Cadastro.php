<?php
include '../conexao/Conexao.php';

class Cadastro extends  Conexao{

    public function cadastroFilial($i0_filial,$d0_filial,$d0_descricao,$d0_sigla,$i0_cliente,$i0_fornecedor,$d0_regional)
    {

       $sql= "INSERT INTO filial_cd (i0_filial, d0_filial, d0_descricao, d0_sigla, i0_cliente, i0_fornecedor, d0_regional)
                values (:i0_filial, :d0_filial, :d0_descricao, :d0_sigla, :i0_cliente, :i0_fornecedor, :d0_regional)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':i0_filial',$i0_filial);
        $sql->bindValue(':d0_filial',$d0_filial);
        $sql->bindValue(':d0_descricao',$d0_descricao);
        $sql->bindValue(':d0_sigla',$d0_sigla);
        $sql->bindValue(':i0_cliente',$i0_cliente);
        $sql->bindValue(':i0_fornecedor',$i0_fornecedor);
        $sql->bindValue(':d0_regional',$d0_regional);
        $sql->execute();
        if ($sql->rowCount() > 0){
          header('Location: ../views/painel/cadastros.php?ok') ;
        }else{
         var_dump("erro");
            //header('Location: ../views/painel/cadastros.php?erro') ;
        }
    }


}

?>

