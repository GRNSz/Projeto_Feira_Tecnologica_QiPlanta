<?php

// Definindo o namespace
namespace MeuProjeto\model;

use MeuProjeto\persistence\ConnectionFactory;

class Cadastrar {

    public function getCadastrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuarioCad = htmlspecialchars(trim($_POST["nome"]));
            $senhaCad = htmlspecialchars(trim($_POST["senha"]));
            $senha2Cad = htmlspecialchars(trim($_POST["senha2"]));

            if ($senhaCad == $senha2Cad) {
                // Obter a conexão
                $conn = ConnectionFactory::getConnection();

                // Preparar a query para evitar SQL Injection
                $sqlInsert = $conn->prepare("INSERT INTO usuarios (nome, senha, senha2) VALUES (?, ?, ?)");
                $sqlInsert->bindParam(1, $usuarioCad);
                $sqlInsert->bindParam(2, $senhaCad);
                $sqlInsert->bindParam(3, $senha2Cad);

                var_dump("Conectou? Não né besta");
                if ($sqlInsert->execute()) {
                    echo "Cadastro realizado com sucesso!";
                    header("Location: ./views/Menu_do_Usuario.php");
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
?>
