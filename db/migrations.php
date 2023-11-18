<?php
include_once "conexao.php";

class Migration
{
    private $conexao;

    public function __construct()
    {
        $conexaoDB = new Conexao();
        $this->conexao = $conexaoDB->conectar();
    }

    public function criarTabelaUsuarios()
    {
        $sql = "

        CREATE TABLE IF NOT EXISTS usuarios (
            id int(11) NOT NULL,
            imagem VARCHAR(255) NOT NULL,
            nome VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            telefone VARCHAR(255) NOT NULL,
            endereco_linha1 VARCHAR(255) NOT NULL,
            endereco_linha2 VARCHAR(255) NOT NULL,
            bairro VARCHAR(255) NOT NULL,
            cidade VARCHAR(255) NOT NULL,
            estado VARCHAR(255) NOT NULL,
            pais VARCHAR(255) NOT NULL,
            codigoPostal VARCHAR(255) NOT NULL,
            senha VARCHAR(300) NOT NULL,
            status VARCHAR(300) NULL,
            documento VARCHAR(300) NULL,
            vencimento DATE NULL,
            dataCriacao DATE,
            dataMudanca DATE
        );
        ";

        if ($this->conexao->query($sql) === true) {
            //echo "Tabela 'usuarios' criada com sucesso!";
        } else {
            echo "Erro ao criar tabela de usuarios: " . $this->conexao->error;
        }
    }
}
