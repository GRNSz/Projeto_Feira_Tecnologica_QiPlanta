<?php

namespace MeuProjeto\controller;

use MeuProjeto\configuration\ConnectionFactory;
use src\model\Usuario;
use MeuProjeto\model\Login;


class UsuarioController {

    public function cadastroelogin()
    {
        header("Location: ./../views/cadastro&login.php");
}
    
        public function login()
        {
            // Verifica se todos os campos obrigatórios estão presentes
            if (empty($_POST['usuario']) || empty($_POST['senha'])) {
                echo "Todos os campos são obrigatórios.";
                return;
            }
    
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
    
            // Cria uma instância da classe Login
            $login = new Login($usuario, $senha);
    
            // Verifica se o login é válido
            if ($login->validate()) {
                echo "Login bem-sucedido.";
            } else {
                echo "Usuário ou senha incorretos.";
            }
        }

public function store()
    {   
    // Verifica se todos os campos obrigatórios estão presentes
    if (empty($_POST['nome']) || empty($_POST['endereco']) || empty($_POST['email']) || empty($_POST['numcell']) || empty($_POST['senha']) || empty($_POST['senha2'])) {
        echo "Todos os campos são obrigatórios.";
        return;
    }

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $numcell = $_POST['numcell'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    if ($senha != $senha2) {
        echo "As senhas não conferem";
        return;
    }

    // Cria uma instância da classe Usuario
    $usuario = new Usuario($nome, $endereco, $email, $numcell, $senha, $senha2);

    // Obtém a conexão com o banco de dados
    $connection = ConnectionFactory::getConnection();

    // Prepara a query de inserção
    $query = "INSERT INTO usuarios (nome, endereco, email, numcell, senha) VALUES (:nome, :endereco, :email, :numcell, :senha)";
    $stmt = $connection->prepare($query);

    // Vincula os parâmetros
    $nome = $usuario->getNome();
    $endereco = $usuario->getEndereco();
    $email = $usuario->getEmail();
    $numcell = $usuario->getNumcell();
    $senha = password_hash($usuario->getSenha(), PASSWORD_DEFAULT);
    $senha2 = password_hash($usuario->getSenha2(), PASSWORD_DEFAULT);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':numcell', $numcell);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':senha2', $senha2);

    // Executa a query
    if ($stmt->execute()) {
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    } 
}