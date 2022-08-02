<?php
class Equipamento{
    private $nome;
    private $id;
    private $modalidade;
    private $tempo_revisao;

    

function __construct($id,$nome,$modalidade,$tempo_revisao)
{
    $this->id=$id;
    $this->nome=$nome;
    $this->modalidade=$modalidade;
    $this->tempo_revisao=$tempo_revisao;
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

    /**
     * Get the value of tempo_revisao
     */
    public function getTempoRevisao() 
    {
        return $this->tempo_revisao;
    }

    /**
     * Set the value of tempo_revisao
     */
    public function setTempoRevisao($tempo_revisao): self
    {
        $this->tempo_revisao = $tempo_revisao;

        return $this;
    }
}