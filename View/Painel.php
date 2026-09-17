<?php

session_start();

if (!isset($_SESSION["email"])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Filmes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="painel">

        <h1>Mimov - Locadora de Filmes</h1>
        <h2>Seja bem-vindo!</h2>
        <p>
            login efeituido com sucesso.
            <?php echo htmlspecialchars($_SESSION["email"]); ?>
        </p>

        <a href="logout.php">Sair</a>

    </div>

</body>

</html>