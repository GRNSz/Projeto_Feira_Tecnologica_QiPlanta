<?php

namespace MeuProjeto\persistence;



class ConnectionFactory {

    private static $connection = null;

    // Conexão com Banco de Dados MySQL
    public static function getConnection() {
        if (self::$connection == null) {
            $host = getenv('DB_HOST') ?: 'localhost';
            $dbname = getenv('DB_NAME') ?: 'usuarios';
            $username = getenv('DB_USER') ?: 'root';
            $password = getenv('DB_PASS') ?: '';
            $dsn = "mysql:host=$host;dbname=$dbname";

            try {
                //var_dump("fora do catch");
                self::$connection = new \PDO("mysql:host=localhost;dbname=usuarios", $username, $password);
                //var_dump("Verifica conexão");
                self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } 
            catch (\PDOException $e) {
                //var_dump("Depois do catch");
                // Log the error message or handle it as needed
                //var_dump($e);
                die('Connection failed: ' . $e->getMessage());
            }  
            
        }

        return self::$connection;
    }
}