<?php
class Pagamento
{
    // Atributos da classe Pagamento
    private $id;
    private $idReserva;
    private $valor;
    private $metodo;
    private $dataCriacao;
    private $dataMudanca;

    // Construtor da classe
    public function __construct($id, $idReserva, $valor, $metodo, $dataMudanca)
    {
        $this->id = $id;
        $this->idReserva = $idReserva;
        $this->valor = $valor;
        $this->metodo = $metodo;
        $this->dataCriacao = date("Y-m-d H:i:s");
        $this->dataMudanca = $dataMudanca;
    }

    // Métodos de acesso (Getters)
    public function getId()
    {
        return $this->id;
    }

    public function getIdReserva()
    {
        return $this->idReserva;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getMetodo()
    {
        return $this->metodo;
    }

    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    public function getDataMudanca()
    {
        return $this->dataMudanca;
    }
}
