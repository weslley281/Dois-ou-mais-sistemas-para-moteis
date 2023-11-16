<?php
class ServicoAdicional
{
    // Atributos da classe ServicoAdicional
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $dataCriacao;
    private $dataMudanca;

    // Construtor da classe
    public function __construct($id, $nome, $descricao, $preco, $dataMudanca)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->dataCriacao = date("Y-m-d H:i:s");
        $this->dataMudanca = $dataMudanca;
    }

    // Métodos de acesso (Getters)
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
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
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
}
