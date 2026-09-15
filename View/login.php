<?php
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

if (!empty($email) && !empty($senha)) {

    $_SESSION["email"] = $email;

    header("Location: painel.php");
    exit;

} else {

    echo "Por favor, preencha todos os campos.";
    echo "<br><a href='index.php'>Voltar</a>";

}

