<?php
class Funcionario
{

    private $id;
    private $nome;
    private $cpf;
    private $salario;
    private $nasc;
    private $recebimento;
    private $modalidade;

    function __construct($id, $nome, $cpf, $salario, $nasc,$recebimento,$modalidade)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
        $this->nasc = $nasc;
        $this->recebimento=$recebimento;
        $this->modalidade=$modalidade;
    }




    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of nasc
     */
    public function getNasc()
    {
        return $this->nasc;
    }

    /**
     * Set the value of nasc
     */
    public function setNasc($nasc): self
    {
        $this->nasc = $nasc;

        return $this;
    }

    /**
     * Get the value of recebimento
     */
    public function getRecebimento()
    {
        return $this->recebimento;
    }

    /**
     * Set the value of recebimento
     */
    public function setRecebimento($recebimento): self
    {
        $this->recebimento = $recebimento;

        return $this;
    }

    /**
     * Get the value of modalidade
     */
    public function getModalidade()
    {
        return $this->modalidade;
    }

    /**
     * Set the value of modalidade
     */
    public function setModalidade($modalidade): self
    {
        $this->modalidade = $modalidade;

        return $this;
    }
}
