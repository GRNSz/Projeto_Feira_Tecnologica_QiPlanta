<?php

// Definindo o namespace
namespace MeuProjeto\model;

ob_start();

use MeuProjeto\persistence\ConnectionFactory;

class Cadastrar {

    public function getCadastrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuarioCad = htmlspecialchars(trim($_POST["nome"]));
            $senhaCad = htmlspecialchars(trim($_POST["senha"]));
            $senha2Cad = htmlspecialchars(trim($_POST["senha2"]));
            $enderecoCad = htmlspecialchars(trim( $_POST["endereco"]));
            $emailCad = htmlspecialchars(trim( $_POST["email"]));
            $numcellCad = htmlspecialchars(trim( $_POST["numcell"]));

            if ($senhaCad == $senha2Cad) {
                // Obter a conexão
                $conn = ConnectionFactory::getConnection();

                // Preparar a query para evitar SQL Injection
                $sqlInsert = $conn->prepare("INSERT INTO usuarios (nome, endereco, email, numcell, senha, senha2) VALUES (?, ?, ?, ?, ?, ?)");
                $sqlInsert->bindParam(1, $usuarioCad);
                $sqlInsert->bindParam(2, $enderecoCad);
                $sqlInsert->bindParam(3, $emailCad);
                $sqlInsert->bindParam(4, $numcellCad);
                $sqlInsert->bindParam(5, $senhaCad);
                $sqlInsert->bindParam(6, $senha2Cad);

                if ($sqlInsert->execute()) {
                   header("Location: ./src/menu.php");
                    exit; // Interrompe o script após redirecionar
                } else {
                    echo "Erro: " . $sqlInsert->errorInfo()[2];
                }

                $conn = null; // Fechar a conexão
            } else {
                echo "As senhas não conferem!";
            }
        }
    }
}

ob_end_flush();
