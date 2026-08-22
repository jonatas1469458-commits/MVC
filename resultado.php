<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Produto Cadastrado</h1>
    <p><strong>Nome:</strong> <?php echo $produto->getNome(); ?></p>
    <p><strong>Preço Unitário:</strong> <?php echo $produto->getprecoUnitario(); ?></p>
    <p><strong>Quantidade:</strong> <?php echo $produto->getquantidade(); ?></p>
    <p><strong>Valor Total:</strong> <?php echo $produto->calcularvalorTotal(); ?></p>

    <?php
    if ($estoque < 5) {
        echo "<p style='color: red;'>Atenção: Estoque baixo!</p>";
    }
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>
