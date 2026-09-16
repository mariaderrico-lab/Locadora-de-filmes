```php
<?php

$filme = $_GET["filme"];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mimov - Alugar</title>
    <link rel="stylesheet" href="style/cat.css">
</head>

<body>

<header>
    <div class="logo">MIMOV</div>

    <nav>
        <a href="painel.php">Início</a>
        <a href="catalogo.php">Catálogo</a>
        <a href="logout.php">Sair</a>
    </nav>
</header>

<main>
    <div class="formulario">
        <h1>Alugar Filme</h1>

        <h2><?php echo $filme; ?></h2>

        <p>Valor da locação:</p>

        <p class="preco">
            R$ 10,00
        </p>

        <form method="POST">
            <button type="submit" name="confirmar" class="alugar">
                Confirmar Aluguel
            </button>
        </form>

        <?php

        if (isset($_POST["confirmar"])) {
            echo "<p class='mensagem'>Aluguel realizado com sucesso!</p>";
        }

        ?>

        <br>

        <a href="catalogo.php">
            Voltar para o catálogo
        </a>
    </div>
</main>

</body>
</html>
```
