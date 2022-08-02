<?php
class DaoEquipamento
{
    public function listar()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from equipamentos');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function incluir(Equipamento $equipamento)
    {

        $sql = 'insert into Equipamentos (nome,modalidades,periodo_revisao) values(?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $equipamento->getNome());
        $pst->bindValue(2, $equipamento->getModalidade());
        $pst->bindValue(3, $equipamento->getTempoRevisao());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function remover(Equipamento $equipamento)
    {
        $sql = 'delete from equipamentos where id=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$equipamento->getId());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
