<?php
require_once "usuarioModel.php";

class Cliente extends Usuario
{
    public function __construct($id, $nome, $telefone, $email, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $dataMudanca)
    {
        parent::__construct($id, $nome, $telefone, $email, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $dataMudanca);
    }
}
