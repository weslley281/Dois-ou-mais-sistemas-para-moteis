<?php
class RegistroManutencao
{
    // Atributos da classe RegistroManutencao
    private $id;
    private $idQuarto;
    private $dataManutencao;
    private $descricaoProblema;
    private $status;
    private $dataCriacao;
    private $dataMudanca;

    // Construtor da classe
    public function __construct($id, $idQuarto, $dataManutencao, $descricaoProblema, $status, $dataMudanca)
    {
        $this->id = $id;
        $this->idQuarto = $idQuarto;
        $this->dataManutencao = $dataManutencao;
        $this->descricaoProblema = $descricaoProblema;
        $this->status = $status;
        $this->dataCriacao = date("Y-m-d H:i:s");
        $this->dataMudanca = $dataMudanca;
    }

    // Métodos de acesso (Getters)
    public function getId()
    {
        return $this->id;
    }

    public function getIdQuarto()
    {
        return $this->idQuarto;
    }

    public function getDataManutencao()
    {
        return $this->dataManutencao;
    }

    public function getDescricaoProblema()
    {
        return $this->descricaoProblema;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    public function getDataMudanca()
    {
        return $this->dataMudanca;
    }

    // Métodos de modificação (Setters)
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
