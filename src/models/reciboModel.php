<?php
class Recibo
{
    // Atributos da classe Recibo
    private $id;
    private $idReserva;
    private $total;
    private $dataCriacao;
    private $dataMudanca;

    // Construtor da classe
    public function __construct($id, $idReserva, $total, $dataMudanca)
    {
        $this->id = $id;
        $this->idReserva = $idReserva;
        $this->total = $total;
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

    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    public function getDataMudanca()
    {
        return $this->dataMudanca;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
