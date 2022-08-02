<?php
class Cliente
{
    private $nome;
    private $id;
    private $idade;
    private $modalidades;
    private $cpf;
    private $mensalidades;


    function __construct($nome, $id, $idade, $modalidades, $cpf, $mensalidades)
    {
        $this->nome = $nome;
        $this->id = $id;
        $this->idade = $idade;
        $this->modalidades = $modalidades;
        $this->cpf = $cpf;
        $this->mensalidades = $mensalidades;
    }

    function getMensalidades()
    {
        return $this->mensalidades;
    }

    function setMensalidades($mensalidades)
    {
        $this->mensalidades = $mensalidades;
        return $this;
    }
    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    function getId()
    {
        return $this->id;
    }


    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function getIdade()
    {
        return $this->idade;
    }


    function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    function getModalidades()
    {
        return $this->modalidades;
    }

    function setModalidades($modalidades)
    {
        $this->modalidades = $modalidades;
        return $this;
    }

    function getCpf()
    {
        return $this->cpf;
    }


    function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }
}
