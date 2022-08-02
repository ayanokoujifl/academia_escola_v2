<?php
class DaoModalidade
{
    public function listar()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from modalidades');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function incluir(Modalidade $equipamento)
    {

        $sql = 'insert into Modalidades (nome,valor) values(?,?);';
        $pst = Conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $equipamento->getNome());
        $pst->bindValue(2, $equipamento->getValor());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function remover(Modalidade $modalidade)
    {
        $sql = 'delete from modalidades where id=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$modalidade->getId());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
