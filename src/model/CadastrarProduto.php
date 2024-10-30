<?php

// Definindo o namespace
namespace MeuProjeto\model;

use MeuProjeto\persistence\ConnectionFactory; // Certifique-se de que esta classe existe e é autoloaded

class CadastrarProduto {

    public function getCadastrarProduto() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nomeProdutoCad = htmlspecialchars(trim($_POST["nome_produto"]));
            $descricaoProdutoCad = htmlspecialchars(trim($_POST["descricao"]));
            $quantidadeProdutoCad = htmlspecialchars(trim($_POST["quantidade"]));
            $valorProdutoCad = htmlspecialchars(trim($_POST["preco"]));
            $tipoProdutoCad = htmlspecialchars(trim($_POST["tipo"]));

            if (isset($nomeProdutoCad) && !empty($nomeProdutoCad) && 
                isset($descricaoProdutoCad) && !empty($descricaoProdutoCad) && 
                isset($quantidadeProdutoCad) && !empty($quantidadeProdutoCad) && 
                isset($valorProdutoCad) && !empty($valorProdutoCad) && 
                isset($tipoProdutoCad) && !empty($tipoProdutoCad)) {

                // Conexão com o banco de dados
                $conn = ConnectionFactory::getConnection();

                // Verificar se a conexão foi bem-sucedida
                if (!$conn) {
                    die("Conexão falhou: " . $conn->errorInfo()[2]);
                }

                // Preparar a query para evitar SQL Injection
                $sqlInsert = $conn->prepare("INSERT INTO produtos (nome, descricao, quantidade, preco, tipo) VALUES (?, ?, ?, ?, ?)");

                // Verificar se a preparação da query foi bem-sucedida
                if (!$sqlInsert) {
                    die("Falha na preparação da query: " . $conn->errorInfo()[2]);
                }

                $sqlInsert->bindParam(1, $nomeProdutoCad);
                $sqlInsert->bindParam(2, $descricaoProdutoCad);
                $sqlInsert->bindParam(3, $quantidadeProdutoCad);
                $sqlInsert->bindParam(4, $valorProdutoCad);
                $sqlInsert->bindParam(5, $tipoProdutoCad);

                // Verificar se a execução da query foi bem-sucedida
                if ($sqlInsert->execute()) {
                    echo "Produto cadastrado com sucesso!";
                    header("Location: ./src/menu.php");
                    exit; // Interrompe o script após redirecionar
                } else {
                    echo "Erro na execução da query: " . $sqlInsert->errorInfo()[2];
                }

                $conn = null; // Fechar a conexão
            } else {
                echo "Cadastro mal sucedido: preencha todos os campos.";
            }
        }
    }
}

ob_end_flush();
