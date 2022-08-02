<?php

class DaoCliente
{

    public function listar()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from cliente');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function incluir(Cliente $cliente)
    {

        $sql = 'insert into Cliente (cpf,nome,modalidades,idade,mensalidades) values(?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getCpf());
        $pst->bindValue(2, $cliente->getNome());
        $pst->bindValue(3, $cliente->getModalidades());
        $pst->bindValue(4, $cliente->getIdade());
        $pst->bindValue(5, $cliente->getMensalidades());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function remover(Cliente $cliente)
    {
        $sql = 'delete from cliente where id=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$cliente->getId());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
