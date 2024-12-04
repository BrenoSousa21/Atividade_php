<?php
// Classe abstrata Bebida
abstract class Bebida {
    // Métodos abstratos
    abstract public function mostrarBebida();
    abstract public function verificarPreco($preco);
}

// Classe Vinho
class Vinho extends Bebida {
    private $nome;
    private $preco;
    private $tipo;

    public function __construct($nome, $preco, $tipo) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->tipo = $tipo;
    }

    public function mostrarBebida() {
        return "Vinho: {$this->nome}, Tipo: {$this->tipo}, Preço: {$this->preco}";
    }

    public function verificarPreco($preco) {
        return $preco < 25;
    }
}

// Classe Refrigerante
class Refrigerante extends Bebida {
    private $nome;
    private $preco;
    private $marca;

    public function __construct($nome, $preco, $marca) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->marca = $marca;
    }

    public function mostrarBebida() {
        return "Refrigerante: {$this->nome}, Marca: {$this->marca}, Preço: {$this->preco}";
    }

    public function verificarPreco($preco) {
        return $preco < 5;
    }
}

// Classe Suco
class Suco extends Bebida {
    private $nome;
    private $preco;
    private $sabor;

    public function __construct($nome, $preco, $sabor) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->sabor = $sabor;
    }

    public function mostrarBebida() {
        return "Suco: {$this->nome}, Sabor: {$this->sabor}, Preço: {$this->preco}";
    }

    public function verificarPreco($preco) {
        return $preco < 2.5;
    }
}
?>
