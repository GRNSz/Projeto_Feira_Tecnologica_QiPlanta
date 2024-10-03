<?php
include 'ConnectionFactory.php';
include 'Login.php';
include 'Cadastrar.php';

use MeuProjeto\persistence\ConnectionFactory;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarioCad = $_POST['nome'];
    $senhaCad = $_POST['senha'];
    $senha2Cad = $_POST['senha2'];

    // Obter a conexão
    $conn = ConnectionFactory::getConnection();

    // Preparar a query para evitar SQL Injection
    $sqlInsert = $conn->prepare("INSERT INTO usuarios (nome, senha, senha2) VALUES (?, ?, ?)");
    $sqlInsert->bindParam(1, $usuarioCad);
    $sqlInsert->bindParam(2, $senhaCad);
    $sqlInsert->bindParam(3, $senha2Cad);

    if ($sqlInsert->execute()) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sqlInsert->errorInfo()[2];
    }

    $conn = null; // Fechar a conexão
}
?>
