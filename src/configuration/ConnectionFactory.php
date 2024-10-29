<?php

namespace MeuProjeto\configuration;

class ConnectionFactory {

    // Atributo estático para armazenar a conexão
    public static $connection;

    // Método para obter a conexão com o banco de dados MySQL
    public static function getConnection() {

        // Verifica se a conexão já foi estabelecida
        if (!isset(self::$connection)) {
            // Obtém as configurações do banco de dados a partir de variáveis de ambiente ou usa valores padrão
            $host = 'localhost';
            $db = 'bdqiplanta';
            $username = 'root';
            $password = '';
            $dsn = 'mysql:host=localhost;dbname=bdqiplanta';

            try {
                // Cria uma nova conexão PDO
                self::$connection = new \PDO( $dsn, $username, $password);
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