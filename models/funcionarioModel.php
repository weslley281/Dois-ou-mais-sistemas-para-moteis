<?php
require_once "usuarioModel.php";

class Funcionario extends Usuario
{
    public function __construct($id, $nome, $telefone, $email, $imagem, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $codigoPostal, $dataMudanca)
    {
        parent::__construct($id, $nome, $telefone, $email, $imagem, $endereco_linha1, $endereco_linha2, $bairro, $cidade, $estado, $pais, $codigoPostal, $dataMudanca);
    }
}
