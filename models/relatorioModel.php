<?php
class Relatorio
{
    private $titulo;
    private $descricao;
    private $dados;

    public function __construct($titulo, $descricao)
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->dados = array();
    }

    public function adicionarDado($chave, $valor)
    {
        $this->dados[$chave] = $valor;
    }

    public function gerarRelatorio()
    {
        echo "<h2>" . $this->titulo . "</h2>";
        echo "<p>" . $this->descricao . "</p>";

        echo "<ul>";
        foreach ($this->dados as $chave => $valor) {
            echo "<li>$chave: $valor</li>";
        }
        echo "</ul>";
    }
}
