<?php

// Definindo o namespace
namespace MeuProjeto\model;

ob_start();

use MeuProjeto\persistence\ConnectionFactory;

include "CadastroProduto.php";

class CadastrarProduto {

    public function getCadastrarProduto() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nomeProdutoCad = htmlspecialchars(trim($_POST["nome"]));
            $descricaoProdutoCad = htmlspecialchars(trim($_POST["descricao"]));
            $quantidadeProdutoCad = htmlspecialchars(trim($_POST["quantidade"]));
            $valorProdutoCad = htmlspecialchars(trim( $_POST["preco"]));
            $tipoProdutoCad = htmlspecialchars(trim( $_POST["tipo"]));
            //$ = htmlspecialchars(trim( $_POST["numcell"]));

            if ((!empty($nomeProdutoCad) && !empty($descricaoProdutoCad) && !empty($quantidadeProdutoCad) && !empty($valorProdutoCad) && !empty($tipoProdutoCad))) {
                echo "Debug: ";
                print_r([
                    'nome' => $nomeProdutoCad,
                    'descricao' => $descricaoProdutoCad,
                    'quantidade' => $quantidadeProdutoCad,
                    'preco' => $valorProdutoCad,
                    'tipo' => $tipoProdutoCad
                ]);
                
                $conn = ConnectionFactory::getConnection();

                // Preparar a query para evitar SQL Injection
                $sqlInsert = $conn->prepare("INSERT INTO produtos (nome, descricao, quantidade, preco, tipo) VALUES (?, ?, ?, ?, ?)");
                $sqlInsert->bindParam(1, $nomeProdutoCad);
                $sqlInsert->bindParam(2, $descricaoProdutoCad);
                $sqlInsert->bindParam(3, $quantidadeProdutoCad);
                $sqlInsert->bindParam(4, $valorProdutoCad);
                $sqlInsert->bindParam(5, $tipoProdutoCad);
                //$sqlInsert->bindParam(6, $senha2Cad);

                if ($sqlInsert->execute()) {
                   // header("Location: ./src/menu.php");
                    exit; // Interrompe o script após redirecionar
                } else {
                    echo "Erro: " . $sqlInsert->errorInfo()[2];
                }

                $conn = null; // Fechar a conexão
            } else {
                echo "Cadastro mal sucedido";
            }
        }
    }
}

ob_end_flush();
