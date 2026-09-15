<?php

session_start();

if (isset($_POST["adicionar"])) {

    $nome = $_POST["nome"];
    $foto = $_POST["foto"];
    $ano = $_POST["ano"];
    $disponibilidade = $_POST["disponibilidade"];
    $custo = $_POST["custo"];

    $filme = [
        "nome" => $nome,
        "foto" => $foto,
        "ano" => $ano,
        "disponibilidade" => $disponibilidade,
        "custo" => $custo
    ];

    $_SESSION["filmes"][] = $filme;

    header("Location: catalogo.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mimov - Adicionar Filme</title>

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

        <h1>Adicionar Filme</h1>

        <form method="POST">

            <label>Nome do filme:</label>
            <input type="text" name="nome" required>

            <label>Foto:</label>
            <input type="text" name="foto" placeholder="img/filme.jpg" required>

            <label>Lançamento:</label>
            <input type="number" name="ano" required>

            <label>Disponibilidade:</label>

            <select name="disponibilidade">

                <option value="Disponível">
                    Disponível
                </option>

                <option value="Indisponível">
                    Indisponível
                </option>

            </select>

            <label>Custo:</label>
            <input type="number" name="custo" step="0.01" required>

            <button type="submit" name="adicionar" class="alugar">
                Adicionar Filme
            </button>

        </form>

    </div>

</main>

</body>

</html>