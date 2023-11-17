<?php
require_once "usuarioModel.php";

class Admin extends Usuario
{
    private $status;
    private $vencimento;

    public function __construct($id, $nome, $telefone, $email, $imagem, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $codigoPostal, $dataMudanca)
    {
        parent::__construct($id, $nome, $telefone, $email, $imagem, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $codigoPostal, $dataMudanca);

        $this->status = "ativo";
        $this->vencimento = date("Y-m-d H:i:s", strtotime("+30 days"));
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getVencimento()
    {
        return $this->vencimento;
    }
}
