<?php

class Produto {
    private $Nome;
    private $Preco;
    private $Quant;

    public function __construct($nome, $preco = 0, $quant = 0) {
        $this->Nome = $nome;
        $this->Preco = $preco;
        $this->Quant = $quant;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getPreco() {
        return $this->Preco;
    }

    public function setNome($nome) {
        $this->Nome = $nome;
    }

    public function setPreco($preco) {
        $this->Preco = $preco;
    }

    public function addEstoque($qtd) {
        if($qtd > 0) {
            $this->Quant += $qtd;
        } else {
            echo "Adicione uma quantidade válida!<br>";
        }
    }

    public function removerEstoque($qtd) {
        if($qtd <= $this->Quant) {
            $this->Quant -= $qtd;
        } else {
            echo "Retire uma quantidade válida!<br>";
        }
    }

    public function mostrarDetalhes() {
        echo "Produto: " . $this->getNome() . "<br>";
        echo "Preço: R$ " . number_format($this->getPreco(), 2, ',', '.') . "<br>";
        echo "Quantidade: " . $this->Quant . "<br>";
    }
}

?>
