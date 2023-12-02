<?php
class RegistroLimpeza
{
    // Atributos da classe RegistroLimpeza
    private $id;
    private $idQuarto;
    private $dataLimpeza;
    private $produtosUtilizados;
    private $status;
    private $dataCriacao;
    private $dataMudanca;

    // Construtor da classe
    public function __construct($id, $idQuarto, $dataLimpeza, $produtosUtilizados, $status, $dataMudanca)
    {
        $this->id = $id;
        $this->idQuarto = $idQuarto;
        $this->dataLimpeza = $dataLimpeza;
        $this->produtosUtilizados = $produtosUtilizados;
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

    public function getDataLimpeza()
    {
        return $this->dataLimpeza;
    }

    public function getProdutosUtilizados()
    {
        return $this->produtosUtilizados;
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
