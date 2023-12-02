<?php
require_once "usuarioModel.php";
require_once "../db/conexao.php";

class Admin extends Usuario
{
    private $status;
    private $vencimento;
    private $documento;

    public function __construct($id, $nome, $telefone, $email, $imagem, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $codigoPostal, $dataMudanca, $documento)
    {
        parent::__construct($id, $nome, $telefone, $email, $imagem, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $codigoPostal, $dataMudanca);

        $this->documento = $documento;
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

    public function getDocumento()
    {
        return $this->documento;
    }
}
