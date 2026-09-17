<?php
session_start();
if (isset($_GET["indice"])) {
    $indice = $_GET["indice"];
    if (isset($_SESSION["filmes"][$indice])) {
        unset($_SESSION["filmes"][$indice]);
        $_SESSION["filmes"] = array_values($_SESSION["filmes"]);
    }
}
header("Location: catalogo.php");
exit;
?>
