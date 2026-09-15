<?php

namespace Model;

require_once __DIR__ . "/../Config/configuration.php";

class Connection
{
    private static $stmt = null;

    public static function getInstance()
    {
        try {
            if (self::$stmt === null) {
                self::$stmt = new \PDO(
                    "mysql:host=" . DB_HOST .
                    ";port=" . DB_PORT .
                    ";dbname=" . DB_NAME,
                    DB_USER,
                    DB_PASSWORD
                );

                self::$stmt->setAttribute(
                    \PDO::ATTR_ERRMODE,
                    \PDO::ERRMODE_EXCEPTION
                );
            }

            return self::$stmt;

        } catch (\PDOException $error) {
            die("Erro na conexão: " . $error->getMessage());
        }
    }
}