<?php
class Reserva
{
    // Atributos da classe Reserva
    private $id;
    private $idCliente;
    private $dataCheckIn;
    private $dataCheckOut;
    private $tipoQuarto;
    private $dataCriacao;
    private $dataMudanca;
    

    // Construtor da classe
    public function __construct($id, $idCliente, $dataCheckIn, $dataCheckOut, $tipoQuarto, $dataMudanca)
    {
        $this->id = $id;
        $this->idCliente = $idCliente;
        $this->dataCheckIn = $dataCheckIn;
        $this->dataCheckOut = $dataCheckOut;
        $this->tipoQuarto = $tipoQuarto;
        $this->dataCriacao = date("Y-m-d H:i:s");
        $this->dataMudanca = $dataMudanca;
    }

    // Métodos de acesso (Getters)
    public function getId()
    {
        return $this->id;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function getDataCheckIn()
    {
        return $this->dataCheckIn;
    }

    public function getDataCheckOut()
    {
        return $this->dataCheckOut;
    }

    public function getTipoQuarto()
    {
        return $this->tipoQuarto;
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
    public function setDataCheckIn($dataCheckIn)
    {
        $this->dataCheckIn = $dataCheckIn;
    }

    public function setDataCheckOut($dataCheckOut)
    {
        $this->dataCheckOut = $dataCheckOut;
    }

    public function setTipoQuarto($tipoQuarto)
    {
        $this->tipoQuarto = $tipoQuarto;
    }
}
