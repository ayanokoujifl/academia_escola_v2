<?php

class DaoFuncionario
{

    public function listar()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from funcionario');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function incluir(Funcionario $funcionario)
    {

        $sql = 'insert into Funcionario (nome,cpf,data_nasc,salario,modalidades,recebimento) values(?,?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
       
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getCpf());
        $pst->bindValue(3, $funcionario->getNasc());
        $pst->bindValue(4, $funcionario->getSalario());
        $pst->bindValue(5,$funcionario->getModalidade());
        $pst->bindValue(6,$funcionario->getRecebimento());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function remover(Funcionario $funcionario)
    {
        $sql = 'delete from funcionario where id=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$funcionario->getId());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
