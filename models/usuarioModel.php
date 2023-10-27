<?php
class Usuario
{
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $endereco_linha1;
    private $endereco_linha2;
    private $bairro;
    private $cidade;
    private $estado;
    private $pais;
    private $dataCriacao;
    private $dataMudanca;

    public function __construct($id, $nome, $telefone, $email, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $dataMudanca)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->endereco_linha1 = $endereco_linha1;
        $this->endereco_linha2 = $endereco_linha2;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
        $this->dataCriacao = date("Y-m-d H:i:s");
        $this->dataMudanca = $dataMudanca;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEnderecoLinha1()
    {
        return $this->endereco_linha1;
    }

    public function getEnderecoLinha2()
    {
        return $this->endereco_linha2;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    public function getDataMudanca()
    {
        return $this->dataMudanca;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setEnderecoLinha1($endereco_linha1)
    {
        $this->endereco_linha1 = $endereco_linha1;
    }

    public function setEnderecoLinha2($endereco_linha2)
    {
        $this->endereco_linha2 = $endereco_linha2;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function setDataMudanca($dataMudanca)
    {
        $this->dataMudanca = $dataMudanca;
    }
}
