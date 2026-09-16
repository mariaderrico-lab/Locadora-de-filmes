<?php

namespace Model;

require_once __DIR__ . "Connection.php";

use PDO;

class Filme
{
    private $conn;

    public function __construct()
    {
        $this->conn = Connection::getInstance();
    }

    public function listar()
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM filmes ORDER BY id DESC"
        );

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrar($titulo, $genero, $disponivel = 1)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO filmes 
            (titulo, genero, disponivel, preco)
            VALUES 
            (:titulo, :genero, :disponivel, 10.00)"
        );

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":disponivel", $disponivel, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function excluir($id)
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM filmes WHERE id = :id"
        );

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
}
