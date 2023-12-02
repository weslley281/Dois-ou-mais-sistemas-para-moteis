<?php
class Quarto
{
    // Atributos da classe Quarto
    private $numero;
    private $tipo;
    private $status;
    private $valor;
    private $dataCriacao;
    private $dataMudanca;

    // Construtor da classe
    public function __construct($numero, $tipo, $status, $valor, $dataMudanca)
    {
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->status = $status;
        $this->valor = $valor;
        $this->dataCriacao = date("Y-m-d H:i:s");
        $this->dataMudanca = $dataMudanca;
    }

    // Métodos de acesso (Getters)
    public function getNumero()
    {
        return $this->numero;
    }

    public function getTipo()
    {
        return $this->tipo;
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

    public function getValor()
    {
        return $this->valor;
    }

    // Métodos de modificação (Setters)
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
