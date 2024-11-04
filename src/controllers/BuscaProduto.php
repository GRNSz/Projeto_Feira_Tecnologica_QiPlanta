<?php

namespace MeuProjeto\controllers;

use MeuProjeto\configuration\ConnectionFactory;

    class BuscaProduto {

        public function busca($pegainfo){

            $nomeProduto = $pegainfo['nomeProduto'];

            if($nomeProduto == ""){
                print "Digite o nome do produto!";
                return;
            } else {

                $connection = ConnectionFactory::getConnection();

                $stmt = $connection->prepare("SELECT * FROM produtos WHERE nomeProduto = :nomeProduto");

                if (!$stmt) {
                    die("Falha na preparação da query: " . $connection->errorInfo()[2]);
                }

                if (!$connection) {
                    die("Conexão falhou: " . $connection->errorInfo()[2]);
                }

                if ($_SERVER["REQUEST_METHOD"] === "GET") {
                    $pegainfo = $_GET;
                }

                $stmt->bindParam(':nomeProduto', $nomeProduto);
                
            }

        }
        
    }