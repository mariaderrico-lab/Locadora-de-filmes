<?php
session_start();

$email = trim($_POST["email"] ?? '');
$senha = trim($_POST["senha"] ?? '');

if (!empty($email) && !empty($senha)) {

    if ($email === "maria.d'errico@ba.estudante.senai.br" && $senha === "1234") {

        $_SESSION["usuario_logado"] = $email;

        header("Location: View/catalogo.php");
        exit;
    } else {

        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Locadora de Filmes</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login-container">
        <h1>Mimov - Locadora de Filmes</h1>
        <h2>Login</h2>

        <?php if (isset($_GET["erro"])): ?>
            <p style="color: red; text-align: center;">E-mail ou senha incorretos!</p>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">E-mail:</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Digite seu e-mail"
                required>

            <label for="senha">Senha:</label>
            <input
                type="password"
                id="senha"
                name="senha"
                placeholder="Digite sua senha"
                required>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>