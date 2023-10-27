<?php
class Reserva
{
    // Atributos da classe Reserva
    private $id;
    private $idCliente;
    private $dataCheckIn;
    private $dataCheckOut;
    private $tipoQuarto;

    // Construtor da classe
    public function __construct($id, $idCliente, $dataCheckIn, $dataCheckOut, $tipoQuarto)
    {
        $this->id = $id;
        $this->idCliente = $idCliente;
        $this->dataCheckIn = $dataCheckIn;
        $this->dataCheckOut = $dataCheckOut;
        $this->tipoQuarto = $tipoQuarto;
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
