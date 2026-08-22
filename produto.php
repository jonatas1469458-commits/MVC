<?php

class Produto {
    

    private $nome;
    private $precoUnitario;
    private $quantidade;

public function setNome($nome) {
    $this ->nome = $nome;
}

public function getNome() {
    return $this-> nome;
}

public function setPrecoUnitario($precoUnitario) {
    $this-> precoUnitario = $precoUnitario;
}

public function getPrecoUnitario() {
    return $this-> precoUnitario;
}

public function setQuantidade($quantidade) {
    $this-> quantidade = $quantidade;

}
public function getquantidade() {
    return $this-> quantidade;

}

public function calcularvalorTotal() {
    return $this-> precoUnitario * $this-> quantidade;
}
 
public function desconto ($percentual) {
    $desconto = $this-> calcularvalorTotal() * ($percentual / 100);
    return $this-> calcularvalorTotal() - $desconto;
}
public function estoque() {
    if ($this-> quantidade < 5) {
        return "Atenção: Estoque baixo!";
    } else {
        return "Estoque suficiente.";
    }
    }
}
