<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado</title>
	<style>
		body{font-family:Arial,Helvetica,sans-serif; padding:20px}
		.low-stock{color:#a00; font-weight:bold}
	</style>
</head>
<body>
	<h1>Resultado do Cadastro</h1>

	<p><strong>Nome:</strong> <?php echo htmlspecialchars($nomeProduto); ?></p>
	<p><strong>Preço unitário:</strong> R$ <?php echo number_format($precoProduto, 2, ',', '.'); ?></p>
	<p><strong>Quantidade:</strong> <?php echo intval($qtdProduto); ?></p>
	<p><strong>Valor total (sem desconto):</strong> R$ <?php echo number_format($valorTotal, 2, ',', '.'); ?></p>
	<p><strong>Desconto aplicado (%):</strong> <?php echo number_format($descontoPercentual, 2, ',', '.'); ?>%</p>
	<p><strong>Valor com desconto:</strong> R$ <?php echo number_format($valorComDesconto, 2, ',', '.'); ?></p>

	<?php if ($estoqueBaixo): ?>
		<p class="low-stock">Aviso: estoque baixo! (menos de 5 unidades)</p>
	<?php endif; ?>

	<p><a href="index.html">Voltar</a></p>
</body>
</html>
