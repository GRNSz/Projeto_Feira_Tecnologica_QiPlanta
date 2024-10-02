<?php

namespace MeuProjeto\persistence;

use \PDO;
use \PDOException;

class ConnectionFactory {

    private static $connection = null;

    // Conexão com Banco de Dados MySQL
    public static function getConnection() {
        if (self::$connection === null) {
            $host = getenv('DB_HOST') ?: '172.17.0.2';
            $dbname = getenv('DB_NAME') ?: 'bdqiplantav3';
            $username = getenv('DB_USER') ?: 'root';
            $password = getenv('DB_PASS') ?: '1234';
            $dsn = "mysql:host=$host;dbname=$dbname";

            try {
                self::$connection = new PDO($dsn, $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Log the error message or handle it as needed
                die('Connection failed: ' . $e->getMessage());
            }
        }

        return self::$connection;
    }
}