<?php

require_once 'Produto.php';

$produto = new Produto();

$produto->setNome($_POST['nome']);
$produto->setprecoUnitario($_POST['precoUnitario']);
$produto->setquantidade($_POST['quantidade']);

echo "Produto cadastrado com sucesso!<br>";
echo "Nome: " . $produto->getNome() . "<br>";
echo "Preço Unitário: " . $produto->getprecoUnitario() . "<br>";
echo "Quantidade: " . $produto->getquantidade() . "<br>";
echo "Valor Total: " . $produto->calcularvalorTotal() . "<br>";

require_once 'resultado.php';
