<?php
require_once 'Produto.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Location: index.html');
	exit;
}

$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$precoUnitario = isset($_POST['precoUnitario']) ? floatval($_POST['precoUnitario']) : 0.0;
$quantidade = isset($_POST['quantidade']) ? intval($_POST['quantidade']) : 0;
$descontoPercentual = isset($_POST['descontoPercentual']) ? floatval($_POST['descontoPercentual']) : 0.0;


$produto = new Produto();
$produto->setNome($nome);
$produto->setPrecoUnitario($precoUnitario);
$produto->setQuantidade($quantidade);

$valorTotal = $produto->calcularValorTotal();
$valorComDesconto = $produto->aplicarDesconto($descontoPercentual);
$estoqueBaixo = $produto->estaEmEstoqueBaixo();

$nomeProduto = $produto->getNome();
$precoProduto = $produto->getPrecoUnitario();
$qtdProduto = $produto->getQuantidade();

include 'resultado.php';

?>

