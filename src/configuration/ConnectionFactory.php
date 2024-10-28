<?php

namespace MeuProjeto\configuration;

class ConnectionFactory {

    // Atributo estático para armazenar a conexão
    private static $connection = null;

    // Método para obter a conexão com o banco de dados MySQL
    public static function getConnection() {

        // Configurações de depuração
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Verifica se a conexão já foi estabelecida
        if (self::$connection == null) {
            // Obtém as configurações do banco de dados a partir de variáveis de ambiente ou usa valores padrão
            $host = getenv('DB_HOST') ?: '172.17.0.2';
            $dbname = getenv('DB_NAME') ?: 'bdqiplanta';
            $username = getenv('DB_USER') ?: 'root';
            $password = getenv('DB_PASS') ?: '1234';
            $dsn = "mysql:host=$host;dbname=$dbname";

            try {
                // Cria uma nova conexão PDO
                self::$connection = new \PDO($dsn, $username, $password);
                // Configura o modo de erro do PDO para exceções
                self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } 
            catch (\PDOException $e) {
                // Em caso de erro, exibe uma mensagem e encerra a execução
                die('Connection failed: ' . $e->getMessage());
            }  
        }

        // Retorna a conexão estabelecida
        return self::$connection;
    }
}