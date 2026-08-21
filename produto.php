<?php

class Produto
{
	private string $nome;
	private float $precoUnitario;
	private int $quantidade;

	public function __construct(string $nome = '', float $precoUnitario = 0.0, int $quantidade = 0)
	{
		$this->nome = $nome;
		$this->precoUnitario = $precoUnitario;
		$this->quantidade = $quantidade;
	}

	public function calcularValorTotal(): float
	{
		return $this->precoUnitario * $this->quantidade;
	}

	public function aplicarDesconto(float $percentual): float
	{
		$total = $this->calcularValorTotal();
		$desconto = $total * ($percentual / 100.0);
		return $total - $desconto;
	}

	public function estaEmEstoqueBaixo(): bool
	{
		return $this->quantidade < 5;
	}

	// setters
	public function setNome(string $nome): void
	{
		$this->nome = $nome;
	}

	public function setPrecoUnitario(float $preco): void
	{
		$this->precoUnitario = $preco;
	}

	public function setQuantidade(int $quantidade): void
	{
		$this->quantidade = $quantidade;
	}

	public function getNome(): string
	{
		return $this->nome;
	}

	public function getPrecoUnitario(): float
	{
		return $this->precoUnitario;
	}

	public function getQuantidade(): int
	{
		return $this->quantidade;
	}
}

?>

